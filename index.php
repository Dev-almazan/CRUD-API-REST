
<?php

// Cargo el controlador
require './controller/usuariosController.php';

$method = $_SERVER['REQUEST_METHOD'];
$controllerUsuario = new UsuariosController();

switch($method)
{
    case 'GET':
        $controllerUsuario->index();
    break;    
    case 'POST':
        $controllerUsuario->post(json_decode(file_get_contents('php://input')));
    break;
    case 'PATCH':
    break;
    case 'DELETE':
    break;
}

?>

