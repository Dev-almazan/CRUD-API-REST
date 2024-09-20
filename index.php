
<?php

// Cargo el controlador
require './controller/usuariosController.php';

$method = $_SERVER['REQUEST_METHOD'];
switch($method)
{
    case 'GET':
           //mando a llamar controlador y ejecuto el metodo index
           $controllerUsuario = new UsuariosController();
           echo json_encode($controllerUsuario->index());
           http_response_code(201);
    break;    
    case 'POST':
        $method = "peticion POST";
    break;
    case 'PATCH':
        $method = "peticion PATCH";
    break;
    case 'DELETE':
        $method = "peticion DELETE";
    break;
}

?>

