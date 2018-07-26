<?php 

require_once("config.php");
// Traz um usuario do banco
/*
$root = new Usuario();
$root->loadbyId(3);
echo $root;*/

// Carrega uma lista de usuarios do banco 
//$lista= Usuario::getList();
//echo json_encode($lista);

//Carrega um lista pelo ID
//$search = Usuario::search("ju");
//echo json_encode($search);

//Carregar um Usuario usando o login e senha
//$usuario = new Usuario();
//$usuario->login("Denisx\ Souza","abc12523");
//echo $usuario;


//Inserir usuario novo

$aluno = new Usuario("Isaias Machado","Brasil2015");

$aluno->insert();

echo $aluno;


 ?>