<?php
namespace src\handlers;

use \src\models\Usuario;

class UsuarioHandler {
    public static function checkLogin() {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = Usuario::select()->where('token', $token)->one();
            if ($data) {
                $loggedUser = new Usuario();
                $loggedUser->usuario_id = $data['usuario_id'];
                $loggedUser->nome = $data['nome'];
                $loggedUser->email = $data['email'];
                $loggedUser->tipo_usuario = $data['tipo_usuario'];
                $loggedUser->foto_perfil = $data['foto_perfil'];

                return $loggedUser;
            }
        }
        return false;
    }

    public static function verifyLogin($email, $senha) {
        $usuario = Usuario::select()->where('email', $email)->one();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $token = md5(time().rand(0, 9999).time());

            Usuario::update()
                ->set('token', $token)
                ->where('usuario_id', $usuario['usuario_id'])
            ->execute();

            return $token;
        }
        return false;
    }

    public static function emailExists($email) {
        $usuario = Usuario::select()->where('email', $email)->one();
        return $usuario ? true : false;
    }

    public static function addUser($nome, $email, $senha, $tipo_usuario = 'cidadao') {
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $token = md5(time().rand(0, 9999).time());

        Usuario::insert([
            'nome' => $nome,
            'email' => $email,
            'senha' => $hash,
            'tipo_usuario' => $tipo_usuario,
            'token' => $token
        ])->execute();

        return $token;
    }
}
