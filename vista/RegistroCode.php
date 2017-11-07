<?php
 	 error_reporting(E_ALL ^ E_NOTICE);
include '../controlador/LoginphpControlador.php';
include '../helps/helps.php';

session_start();



if($_SERVER["REQUEST_METHOD"]=="POST"){

	if(isset($_POST["txtMatricula"]) && isset($_POST["txtNombre"]) && isset($_POST["txtPaterno"]) && isset($_POST["txtMaterno"]) && isset($_POST["txtUsername"]) && isset($_POST["txtPassword"]) && isset($_POST["txtEmail"])){

	$txtMatricula = validar_campo($_POST["txtMatricula"]);
	$txtNombre = validar_campo($_POST["txtNombre"]);
	$txtPaterno = validar_campo($_POST["txtPaterno"]);
	$txtMaterno = validar_campo($_POST["txtMaterno"]);
	$txtUsername = validar_campo($_POST["txtUsername"]);
	$txtPassword = validar_campo($_POST["txtPassword"]);
	$txtPrivilegio = 2;


 if(LoginphpControlador::registro($txtMatricula, $txtNombre, $txtPaterno, $txtMaterno, $txtUsername, $txtPassword,$txtEmail, $txtPrivilegio )){
 	$loginphp		= UsuarioControlador::getUsuario($txtMatricula, $txtPassword);

 	$_SESSION["usuario"] = array(
 		"matricula"	=> $loginphp->getMatricula(),
  		"nombre"	=> $loginphp->getNombre(),
 		"paterno"	=> $loginphp->getPaterno(),
 		"materno"	=> $loginphp->getMaterno(),
 		"username"	=> $loginphp->getUsername(),
 		"privilegio"	=> $loginphp->getPrivilegio(),
 	);
header("location:admin.php");
 		}
	}

}
else
{header("location:registro.php?error=1");
}