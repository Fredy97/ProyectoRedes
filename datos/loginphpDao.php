<?php


include 'conexion.php';
include '../entidades/loginphp.php';

class loginphpDao extends conexion{

	protected static $cnx;

	private static function getConexion(){

		self::$cnx = conexion::conectar(); 
	}


	private static function desconectar(){

		self::$cnx = null;
	}

/**
*Metodo que sirve para validar el login
*
*@param object $loginphp
*@return boolean
*/
	public static function login($loginphp){

		$query = "SELECT  * FROM loginphp WHERE matricula = :matricula AND password = :password";

		self::getConexion();
		$resultado = self::$cnx->prepare($query);
		$resultado->bindParam(":matricula",$loginphp->getMatricula());
		$resultado->bindParam(":password",$loginphp->getPassword());

		$resultado->execute();

		if($resultado->rowCount() > 0){
			$filas = $resultado->fetch();
			if($filas["matricula"]==$loginphp->getMatricula()
				&& $filas["password"]==$loginphp->getPassword()){
				return true;

			}
		}

		return false;

	}



}