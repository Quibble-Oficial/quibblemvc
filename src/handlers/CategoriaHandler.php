<?php
namespace src\handlers;

use \src\models\Categoria;

class CategoriaHandler {

    public static function getAll() {
        return Categoria::select()->orderBy('nome', 'asc')->get();
    }

}
