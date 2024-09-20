
<?php

require './model/usuarios.php';

class UsuariosController extends UsuariosModel {

    private $model;

     public function __construct() {
         $this->model = new UsuariosModel();
    }

    public function index() {
       return $this->model->getAll();
    }
}

?>

