<?php

namespace src\controllers;

use \core\Controller;
use \src\handlers\UsuarioHandler;
use \src\handlers\CategoriaHandler;
use \src\handlers\ReclamacaoHandler;
use \src\handlers\SeguidorHandler;

class HomeController extends Controller
{

    private $loggedUser;

    public function __construct()
    {
        $this->loggedUser = UsuarioHandler::checkLogin();

        if ($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index()
    {

        $filtroCategoria = filter_input(INPUT_GET, 'categoria'); // pega do select enviado no GET

        $reclamacoes = ReclamacaoHandler::getAll($this->loggedUser, $filtroCategoria);
        $categorias = CategoriaHandler::getAll();

        $this->render('feed', [
            'loggedUser' => $this->loggedUser,
            'categorias' => $categorias,
            'reclamacoes' => $reclamacoes,
            'filtroCategoria' => $filtroCategoria
        ]);
    }

    public function sobre()
    {
        $this->render('sobre', ['loggedUser' => $this->loggedUser]);
    }

    public function usuario($args)
    {
        // pega os dados do usuário com o Id passado na URL
        $usuario = UsuarioHandler::getUsuarioById($args['id']);

        if (!$usuario) {
            // se não encontrar, pode redirecionar pra home ou 404
            $this->render('404');
            return;
        }

        $stats = UsuarioHandler::getStats($args['id']);

        $estáSeguindo = SeguidorHandler::estáSeguindo($this->loggedUser->usuario_id, $args['id']);

        $mesmoUsuario = ($usuario->usuario_id === $this->loggedUser->usuario_id);

        // renderiza a view do perfil
        $this->render('usuario', [
            'loggedUser' => $this->loggedUser,
            'usuario' => $usuario,
            'estáSeguindo' => $estáSeguindo,
            'mesmoUsuario' => $mesmoUsuario,
            'stats' => $stats
        ]);
    }

    public function usuarioPrefeito($args)
    {
        $usuario = UsuarioHandler::getUsuarioById($args['id']);

        if (!$usuario) {
            // se não encontrar, pode redirecionar pra home ou 404
            $this->render('404');
            return;
        }

        if ($usuario->tipo_usuario !== 'prefeito') {
            $this->render('404');
            return;
        }

        // renderiza a view do perfil
        $this->render('prefeito', [
            'loggedUser' => $this->loggedUser,
            'usuario' => $usuario
        ]);
    }

    public function notificacoes()
    {
        $this->render('notificacoes', ['loggedUser' => $this->loggedUser]);
    }

    public function comunidade()
    {
        $this->render('comunidade', ['loggedUser' => $this->loggedUser]);
    }

    public function alterarUsuario()
    {
        $this->render('alterar-usuario', ['loggedUser' => $this->loggedUser]);
    }

    public function alterarUsuarioAction()
    {
        // Recebe os inputs
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, 'senha');
        $confirmarSenha = filter_input(INPUT_POST, 'confirmar_senha');

        // Recebe o arquivo
        $avatar = $_FILES['avatar'] ?? null;

        // Validações básicas
        if ($nome && $email) {

            // Validação de senha
            if (!empty($senha)) {
                if ($senha !== $confirmarSenha) {
                    $_SESSION['flash'] = 'As senhas não conferem.';
                    $this->redirect('/alterar-usuario');
                }
            }

            // Chama o Handler
            $resultado = UsuarioHandler::updateUser(
                $this->loggedUser->usuario_id,
                $nome,
                $email,
                $bio,
                $senha,
                $avatar
            );

            if ($resultado === true) {
                $_SESSION['flash'] = 'Perfil atualizado com sucesso!';
                $this->redirect('/alterar-usuario');
            } else {
                // Se retornou string, é mensagem de erro (ex: email duplicado)
                $_SESSION['flash'] = $resultado;
                $this->redirect('/alterar-usuario');
            }
        } else {
            $_SESSION['flash'] = 'Preencha os campos obrigatórios.';
            $this->redirect('/alterar-usuario');
        }
    }
}
