<?php

/**
*funcion que sirve para validar y limpiar un campo
*
*@param input $campo 	tiene que ser campo de tipo POST
*@return string

*/

function validar_campo($campo){

	$campo = trim($campo);
	$campo = stripcslashes($campo);
	$campo = htmlspecialchars($campo);


	return $campo;

}
