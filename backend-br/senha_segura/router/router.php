<?php

$rotas = [
    '/' => '../index.php',
    'validate-password' => '../password_validator.php'
];

$rota = $_GET['url'];


if (array_key_exists($rota, $rotas)){
    require_once $rotas[$rota];
}
else{
    http_response_code(404);
    echo json_encode(array("message" => "Essa rota não existe!"));  
    exit;
}


?>