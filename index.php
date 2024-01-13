<?php 

require_once("config.php");

//carrega um usuario 
//$usuario = new Usuario();

//$usuario->loadById(7);

//$usuario->delete();

//echo $usuario;
//$search = Usuario::search("a");

//echo json_decode($search);

//$usuario = new Usuario();
//$usuario->login("root", "!@#$%%");

//echo $usuario;

$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;

 ?>