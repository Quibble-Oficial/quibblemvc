<?php

namespace src\handlers;

use \src\models\Reclamacoe;

class ReclamacaoHandler
{

    // Adiciona reclamação com foto
    public static function adicionarReclamacao($usuario_id, $categoria_id, $localizacao_id, $titulo, $descricao, $arquivo)
    {
        $midia = null;

        // Se houver arquivo enviado
        if ($arquivo && $arquivo['tmp_name'] != '') {
            // Cria pasta se não existir
            $uploadDir = __DIR__ . '/../../public/assets/uploads/reclamacoes/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Gera nome único
            $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
            $nomeArquivo = md5(time() . rand(0, 9999)) . '.' . $extensao;
            $caminhoServidor = $uploadDir . $nomeArquivo;
            $caminhoPublic = 'assets/uploads/reclamacoes/' . $nomeArquivo;

            if (move_uploaded_file($arquivo['tmp_name'], $caminhoServidor)) {
                $midia = $caminhoPublic;
            }
        }

        // Insere no banco
        Reclamacoe::insert([
            'usuario_id' => $usuario_id,
            'categoria_id' => $categoria_id,
            'localizacao_id' => $localizacao_id,
            'titulo' => $titulo,
            'descricao' => $descricao,
            'midia' => $midia
        ])->execute();

        // Retorna o ID da nova reclamação
        $ultima = Reclamacoe::select()
            ->orderBy('reclamacao_id', 'DESC')
            ->one();

        return $ultima ? $ultima['reclamacao_id'] : false;
    }

    public static function getAll()
    {
        $reclamacoes = Reclamacoe::select([
            'reclamacoes.reclamacao_id',
            'reclamacoes.usuario_id', // <-- Adicione esta linha
            'reclamacoes.titulo',
            'reclamacoes.descricao',
            'reclamacoes.midia',
            'reclamacoes.status',
            'reclamacoes.criado_em',
            'usuarios.nome as usuario_nome',
            'usuarios.foto_perfil as usuario_foto',
            'categorias.nome as categoria_nome',
            'instituicoes.nome as instituicao_nome',
            'comunidades.nome as comunidade_nome',
            'localizacoes.logradouro as logradouro',
            'localizacoes.numero as numero',
            'localizacoes.cep as cep'
        ])
            ->join('usuarios', 'usuarios.usuario_id', '=', 'reclamacoes.usuario_id')
            ->join('categorias', 'categorias.categoria_id', '=', 'reclamacoes.categoria_id')
            ->leftJoin('instituicoes', 'instituicoes.instituicao_id', '=', 'reclamacoes.instituicao_id')
            ->leftJoin('comunidades', 'comunidades.comunidade_id', '=', 'reclamacoes.comunidade_id')
            ->leftJoin('localizacoes', 'localizacoes.localizacao_id', '=', 'reclamacoes.localizacao_id')
            ->orderBy('reclamacoes.reclamacao_id', 'DESC')
            ->get();


        return $reclamacoes;
    }
}
