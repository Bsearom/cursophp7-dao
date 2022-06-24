<?php

require_once("config.php");

//Carrega um usúario
//$João = new Usuario();
//$João->loadbyId(4);
//echo $João;

//Carrega uma lista de usúarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("José", "1234567890");

echo $usuario;

?>