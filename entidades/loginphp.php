<?php

class loginphp{

	private $matricula;
	private $nombre;
	private $paterno;
	private $materno;
	private $username;
	private $password;
	private $email;
	private $privilegio;
	private $fechareg;


	public function getMatricula(){
		return $this->matricula;
	}

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getPaterno(){
		return $this->paterno;
	}

	public function setPaterno($paterno){
		$this->paterno = $paterno;
	}

	public function getMaterno(){
		return $this->materno;
	}

	public function setMaterno($materno){
		$this->materno = $materno;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getPrivilegio(){
		return $this->privilegio;
	}

	public function setPrivilegio($privilegio){
		$this->privilegio = $privilegio;
	}

	public function getFechareg(){
		return $this->fechareg;
	}

	public function setFechareg($fechareg){
		$this->fechareg = $fechareg;
	}



}