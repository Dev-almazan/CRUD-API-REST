
<?php


require './model/usuarios.php';
$usuario = new Usuarios();
$method = $_SERVER['REQUEST_METHOD'];
switch($method)
{
    case 'GET':
           http_response_code(201);
           echo json_encode($usuario->getAll());
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

