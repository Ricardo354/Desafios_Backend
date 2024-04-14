<?php

include_once 'router/router.php';

header('Content-type: application/json');

$json = json_decode(file_get_contents('php://input'), true);
$pass = $json['password'];

$errors = [];


if (strlen($pass) < 8){
        array_push($errors, "Sua senha possui menos de 8 caracteres!");
}   
if (!(bool) preg_match('/\d/', $pass)){ 
        array_push($errors, "Sua senha não possui nenhum digito!");
}
if (!(bool) preg_match('/[a-z]/', $pass)){ 
        array_push($errors, "Sua senha não possui letras minusculas!");
} 
if (!(bool) preg_match('/[A-Z]/', $pass)){ 
        array_push($errors, "Sua senha não possui letras maiusculas!");        
}
if (!(bool) preg_match('/[!@#$%^&*().]/', $pass)){
        array_push($errors, "Sua senha não possui caracteres especiais!");
}

if (count($errors) > 0){
        http_response_code(400);
        echo json_encode(array("message" => $errors));
}
else{
        http_response_code(204);
}



?>