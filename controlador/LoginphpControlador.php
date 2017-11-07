<?php

include '../datos/loginphpDao.php';

class LoginphpControlador{

	public static function login($matricula,$password){

		$obj_loginphp = new loginphp();
		$obj_loginphp->setMatricula($matricula);
		$obj_loginphp->setPassword($password);

		return loginphpDao::login($obj_loginphp);
	}



	public static function getUsuario($matricula,$password){

		$obj_loginphp = new loginphp();
		$obj_loginphp->setMatricula($matricula);
		$obj_loginphp->setPassword($password);

		return loginphpDao::getUsuario($obj_loginphp);
	}



	public function registro($matricula,$nombre,$paterno,$materno,$username,$password,$email,$privilegio){

		$obj_loginphp = new loginphp();
		$obj_loginphp->setMatricula($matricula);
		$obj_loginphp->setNombre($nombre);
		$obj_loginphp->setPaterno($paterno);
		$obj_loginphp->setMaterno($materno);
		$obj_loginphp->setUsername($username);
		$obj_loginphp->setPassword($password);
		$obj_loginphp->setEmail($email);
		$obj_loginphp->setPrivilegio($privilegio);

		return loginphpDao::registrar($obj_loginphp);
	}

}