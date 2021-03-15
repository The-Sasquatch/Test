<?php

require_once "operacionDB.php";
require_once "Usuario.php";



class ManejadorUsuario {


public function insertarUsuario (Usuario $m) {
	$db = new OperacionDB();
	$query="INSERT INTO usuario (nb_usuario, co_correo, co_clave) VALUES (" . 
	"'" . $m->getNb_usuario() . "'" . 
	", " . "'" . $m->getCo_correo() . "'" . 
	", " . "'" . $m->getCo_clave() . "'" . 
	")";

	$result = $db->runQuery($query);
	
	return $result;

}

public function modificarUsuario (Usuario $m) {
	$db = new OperacionDB();
	$query="UPDATE usuario SET nb_usuario='" . $m->getNb_usuario() . "'" . 
	", " . "co_correo='" . $m->getCo_correo() . "'" . 
	", " . "co_clave='" . $m->getCo_clave() . "'" . 
	" WHERE 1=1 AND nu_usuario='" . $m->getNu_usuario() . "'";

	$result = $db->runQuery($query);
	
	return $result;

}

public function eliminarUsuario ($nu_usuario) {
	$db = new OperacionDB();
	$query="DELETE FROM usuario WHERE 1=1 AND nu_usuario='" . $nu_usuario . "'";

	$result = $db->runQuery($query);
	
	return $result;

}

public function buscarUsuario ( $nu_usuario ) {
	$usuario = new Usuario();
	$db = new OperacionDB();
	$query="SELECT nu_usuario, nb_usuario, co_correo, co_clave FROM usuario " .
	"WHERE 1=1 AND nu_usuario='" . $nu_usuario . "'";

	$result = $db->runSelect($query);

	if (count($result) > 0) {

		$x=0;
		$usuario->setNu_usuario($result[$x]["nu_usuario"]);
		$usuario->setNb_usuario($result[$x]["nb_usuario"]);
		$usuario->setCo_correo($result[$x]["co_correo"]);
		$usuario->setCo_clave($result[$x]["co_clave"]);
		

	}

	return $usuario;

}

public function obtenerListaUsuario($condicion='1=1') {
	$arreglo=array();
	$db = new OperacionDB();
	$query="SELECT nu_usuario, nb_usuario, co_correo, co_clave FROM usuario " .
	"WHERE $condicion";

	$result = $db->runSelect($query);

	for($x=0; $x<count($result); $x++) {
		$usuario = new Usuario();

		$usuario->setNu_usuario($result[$x]["nu_usuario"]);
		$usuario->setNb_usuario($result[$x]["nb_usuario"]);
		$usuario->setCo_correo($result[$x]["co_correo"]);
		$usuario->setCo_clave($result[$x]["co_clave"]);
		

		array_push($arreglo,$usuario);

	}

	return $arreglo;

}


} // fin class ManejadorUsuario
?>