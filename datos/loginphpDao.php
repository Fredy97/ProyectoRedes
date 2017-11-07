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








/**
*Metodo que sirve para obtener un usuario
*
*@param object $loginphp
*@return boolean
*/
	public static function getUsuario($loginphp){

		$query = "SELECT matricula, nombre, paterno, materno, username, privilegio,password, fechareg FROM loginphp WHERE matricula = :matricula AND password = :password";

		self::getConexion();
		$resultado = self::$cnx->prepare($query);
		$resultado->bindParam(":matricula",$loginphp->getMatricula());
		$resultado->bindParam(":password",$loginphp->getPassword());

		$resultado->execute();

		$filas= $resultado->fetch();

		$loginphp = new Loginphp();

		$loginphp->setMatricula($filas["matricula"]);
		$loginphp->setNombre($filas["nombre"]);
		$loginphp->setPaterno($filas["paterno"]);
		$loginphp->setMaterno($filas["materno"]);
		$loginphp->setUsername($filas["username"]);
		$loginphp->setEmail($filas["email"]);
		$loginphp->setPrivilegio($filas["privilegio"]);
		$loginphp->setPassword($filas["password"]);
		$loginphp->setFechareg($filas["fechareg"]);


		return $loginphp;

	}










/**
*Metodo que sirve para registrar usuario
*
*@param object $usuario
*@return boolean
*/
	public static function registrar($loginphp){

		$query = "INSERT INTO loginphp (matricula, nombre, paterno, materno, username, password, email, privilegio) VALUES (:matricula, :nombre, :paterno, :materno, :username, :password,:email, :privilegio)";

		self::getConexion();

		$resultado = self::$cnx->prepare($query);

		$resultado->bindParam(":matricula", $loginphp->getMatricula());

		$resultado->bindParam(":nombre", $loginphp->getNombre());
		$resultado->bindParam(":paterno", $loginphp->getPaterno());
		$resultado->bindParam(":materno", $loginphp->getMaterno());
		$resultado->bindParam(":username", $loginphp->getUsername());
		$resultado->bindParam(":password", $loginphp->getPassword());
		$resultado->bindParam(":email", $loginphp->getEmail());

		if ($resultado->execute()){
			return true;
		}

		return false;
	}

}