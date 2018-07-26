<?php 

require_once("config.php");

//$sql = new Sql();

//$user=$sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($user);

$root = new Usuario();

$root->loadbyId(3);// Traz do bando de dados o Id 3 do usurio

echo $root;

 ?>