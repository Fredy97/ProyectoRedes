<?php
 	 error_reporting(E_ALL ^ E_NOTICE);
include '../controlador/LoginphpControlador.php';
include '../helps/helps.php';

session_start();

header('Content-type: application/json');

$resultado = array();

if($_SERVER["REQUEST_METHOD"]=="POST"){

	if(isset($_POST["txtMatricula"]) && isset($_POST["txtPassword"])){

	$txtMatricula = validar_campo($_POST["txtMatricula"]);
	$txtPassword = validar_campo($_POST["txtPassword"]);


	$resultado = array("estado"=>"true");
 if(LoginphpControlador::login($txtMatricula, $txtPassword)){
 	
 		$loginphp = LoginphpControlador::getUsuario($txtMatricula, $txtPassword);
 		$_SESSION["loginphp"]= array(
 			"nombre"=>$loginphp->getNombre(),
 			"paterno"=>$loginphp->getPaterno(),
 			"materno"=>$loginphp->getMaterno(),
 			"username"=>$loginphp->getUsername(),
 			"email"=>$loginphp->getEmail(),
 			"matricula"=>$loginphp->getMatricula(),
 			"privilegio" =>$loginphp->getPrivilegio()
 		); 
 		

 		 return print (json_encode($resultado));

 		}
	}

}

$resultado = array("estado"=>"false");
 return print (json_encode($resultado));
