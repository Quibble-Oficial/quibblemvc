<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {
    public $usuario_id;
    public $nome;
    public $email;
    public $senha;
    public $tipo_usuario;
    public $bio;
    public $foto_perfil;
    public $telefone;
    public $localizacao_id;
    public $criado_em;
    public $atualizado_em;
}