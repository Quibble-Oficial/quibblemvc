<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\ComentarioHandler;
use \src\handlers\UsuarioHandler;

class ComentarioController extends Controller
{
    private $loggedUser;

    public function __construct()
    {
        // A checagem de login continua aqui
        $this->loggedUser = UsuarioHandler::checkLogin();
        // Não precisamos de redirect aqui, pois a resposta é JSON.
    }

    // Método auxiliar para enviar o JSON e finalizar
    private function responderJson(array $data, int $statusCode = 200)
    {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit; // Garante que o script pare aqui
    }

    // Rota para POSTAR um novo comentário (Geralmente via POST)
    public function novo()
    {
        $reclamacao_id = filter_input(INPUT_POST, 'reclamacao_id', FILTER_VALIDATE_INT);
        $comentario_texto = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_SPECIAL_CHARS); // Use essa para mais segurança!

        if (!$this->loggedUser) {
            // Usa o método auxiliar
            $this->responderJson(['error' => 'Usuário não autenticado.'], 401); 
        }

        if ($reclamacao_id && $comentario_texto) {
            
            $sucesso = ComentarioHandler::adicionarComentario(
                $reclamacao_id, 
                $this->loggedUser->usuario_id, 
                $comentario_texto
            );
            
            if ($sucesso) {
                // Sucesso: Retorna o novo comentário ou uma mensagem simples
                $this->responderJson(['success' => true, 'message' => 'Comentário adicionado.']);
            } else {
                $this->responderJson(['error' => 'Falha ao adicionar comentário.'], 500);
            }
        } else {
            $this->responderJson(['error' => 'Dados inválidos.'], 400);
        }
    }
    
    // Rota para buscar todos os comentários de uma reclamação (Geralmente via GET)
    public function buscar($args)
    {
        $reclamacao_id = $args['id'] ?? null;
        
        if ($reclamacao_id) {
            $comentarios = ComentarioHandler::getComentariosByReclamacaoId($reclamacao_id);
            
            $this->responderJson(['success' => true, 'comentarios' => $comentarios]);
        } else {
            $this->responderJson(['error' => 'ID da reclamação não fornecido.'], 400);
        }
    }
}