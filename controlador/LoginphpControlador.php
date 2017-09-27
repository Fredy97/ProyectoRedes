<?php

include '../datos/loginphpDao.php';

class LoginphpControlador{

	public static function login($matricula,$password){

		$obj_loginphp = new loginphp();
		$obj_loginphp->setMatricula($matricula);
		$obj_loginphp->setPassword($password);

		return loginphpDao::login($obj_loginphp);
	}
}