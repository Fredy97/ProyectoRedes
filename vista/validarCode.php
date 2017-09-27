<?php
 	 error_reporting(E_ALL ^ E_NOTICE);
include '../controlador/LoginphpControlador.php';

$resultado = array();

if(isset($_POST["txtMatricula"]) && isset($_POST["txtPassword"])){

	$txtMatricula = $_POST["txtMatricula"];
	$txtPassword = $_POST["txtPassword"];


	$resultado = array("estado"=>"true");
 if(LoginphpControlador::login($txtMatricula, $txtPassword)){
 	 return print (json_encode($resultado));



 }
}
$resultado = array("estado"=>"false");
 return print (json_encode($resultado));
