<?php

session_start();

require_once "../modelo/ManejadorUsuario.php";

$manejador = new ManejadorUsuario();

if ((isset($_POST['opcion'])) && ($_POST['opcion'] == '1')){
	
	$co_correo=$_POST["co_correo"];
	$co_clave=$_POST["co_clave"];
	
	$condicion = "co_correo = '$co_correo' AND co_clave = '$co_clave'";

	$resultado = $manejador->obtenerListaUsuario($condicion);

	if(count($resultado) > 0){
		
		$usuario = $resultado[0];
		$_SESSION['nu_usuario'] = $usuario->getNu_usuario();
		$_SESSION['nb_usuario'] = $usuario->getNb_usuario();
		$_SESSION['co_correo'] = $usuario->getCo_correo();
		$mensaje="Bienvenido al sistema, haga click en ....?";
		
	}else{
		$mensaje="Error en parámetros";
	}

}

require_once "../vista/UsuarioLogin.php";

?>