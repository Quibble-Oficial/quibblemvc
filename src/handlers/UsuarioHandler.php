<?php

namespace src\handlers;

use \src\models\Usuario;
use \src\models\Reclamacoe;
use \src\models\Comentario;
use \src\models\Seguidore;
use \src\models\Upvote;
use ClanCats\Hydrahon\Query\Expression as Ex;

class UsuarioHandler
{
    public static function checkLogin()
    {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = Usuario::select()->where('token', $token)->one();

            if ($data) {
                $loggedUser = new Usuario();
                $loggedUser->usuario_id = intval($data['usuario_id']);
                $loggedUser->nome = $data['nome'];
                $loggedUser->email = $data['email'];
                $loggedUser->foto_perfil = $data['foto_perfil'];
                $loggedUser->bio = $data['bio'];

                $loggedUser->tipo_usuario = $data['tipo_usuario'];

                return $loggedUser;
            }
        }

        return false;
    }

    public static function verifyLogin($email, $senha)
    {
        $usuario = Usuario::select()->where('email', $email)->one();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $token = md5(time() . rand(0, 9999) . time());

            Usuario::update()
                ->set('token', $token)
                ->where('usuario_id', $usuario['usuario_id'])
                ->execute();

            return $token;
        }
        return false;
    }

    public static function emailExists($email)
    {
        $usuario = Usuario::select()->where('email', $email)->one();
        return $usuario ? true : false;
    }

    public static function addUser($nome, $email, $senha, $tipo_usuario = 'cidadao')
    {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $token = md5(time() . rand(0, 9999) . time());

        Usuario::insert([
            'nome' => $nome,
            'email' => $email,
            'senha' => $hash,
            'tipo_usuario' => $tipo_usuario,
            'token' => $token,
            'foto_perfil' => 'default.png'
        ])->execute();

        return $token;
    }

    public static function getUsuarioById($id)
    {
        $data = Usuario::select()->where('usuario_id', $id)->one();

        if ($data) {
            $usuario = new Usuario();
            $usuario->usuario_id   = $data['usuario_id'];
            $usuario->nome         = $data['nome'];
            $usuario->email        = $data['email'];
            $usuario->tipo_usuario = $data['tipo_usuario'];
            $usuario->foto_perfil  = $data['foto_perfil'];
            $usuario->bio          = $data['bio'] ?? null;
            $usuario->telefone     = $data['telefone'] ?? null;
            $usuario->criado_em    = $data['criado_em'];

            return $usuario;
        }

        return null;
    }

    public static function updateUser($id, $nome, $email, $bio, $senha, $avatar)
    {
        // 1. Verifica se o e-mail já existe para OUTRO usuário
        $emailExists = Usuario::select()
            ->where('email', $email)
            ->where('usuario_id', '!=', $id) // Exclui o próprio usuário da busca
            ->one();

        if ($emailExists) {
            return 'E-mail já está em uso por outro usuário.';
        }

        // 2. Prepara os dados para update
        $updateData = [
            'nome' => $nome,
            'email' => $email,
            'bio' => $bio
        ];

        // 3. Lógica de Senha (só atualiza se o usuário digitou algo)
        // if (!empty($senha)) {
        //     $hash = password_hash($senha, PASSWORD_DEFAULT);
        //     $updateData['senha'] = $hash;
        // }

        // 4. Lógica de Upload de Avatar
        if ($avatar && $avatar['tmp_name'] != '') {
            // Tipos permitidos
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];

            if (in_array($avatar['type'], $allowedTypes)) {
                $uploadDir = __DIR__ . '/../../public/assets/uploads/avatars/';

                // Gera nome único: md5(time) + .extensão
                $ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
                $nomeArquivo = md5(time() . rand(0, 9999)) . '.' . $ext;

                if (move_uploaded_file($avatar['tmp_name'], $uploadDir . $nomeArquivo)) {
                    $updateData['foto_perfil'] = $nomeArquivo;
                }
            }
        }

        // 5. Executa o Update no Banco
        Usuario::update($updateData)
            ->where('usuario_id', $id)
            ->execute();

        return true; // Sucesso
    }

    public static function getStats($usuarioId)
    {
        // 1. Total de Postagens (Reclamações feitas)
        $totalPosts = Reclamacoe::select(new Ex('COUNT(*) as c'))
            ->where('usuario_id', $usuarioId)
            ->one();

        // 2. Total de Comentários Feitos (em qualquer post)
        $totalComentarios = Comentario::select(new Ex('COUNT(*) as c'))
            ->where('usuario_id', $usuarioId)
            ->one();

        // 3. Total de Seguidores
        $totalSeguidores = Seguidore::select(new Ex('COUNT(*) as c'))
            ->where('seguido_id', $usuarioId)
            ->one();

        // 4. Total de Upvotes RECEBIDOS (A lógica mais complexa)
        // Precisamos contar quantos upvotes existem NAS reclamações DESSE usuário
        $totalUpvotes = Upvote::select(new Ex('COUNT(upvotes.reclamacao_id) as c'))
            ->join('reclamacoes', 'reclamacoes.reclamacao_id', '=', 'upvotes.reclamacao_id')
            ->where('reclamacoes.usuario_id', $usuarioId)
            ->one();

        return [
            'reclamacoes' => intval($totalPosts['c'] ?? 0),
            'comentarios' => intval($totalComentarios['c'] ?? 0),
            'seguidores'  => intval($totalSeguidores['c'] ?? 0),
            'upvotes'     => intval($totalUpvotes['c'] ?? 0)
        ];
    }
}
