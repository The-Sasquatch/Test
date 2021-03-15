<?php

session_start();

require_once "../modelo/ManejadorUsuario.php";

$manejador = new ManejadorUsuario();

if ((isset($_POST['opcion'])) && ($_POST['opcion'] == '1')){
	
	$nu_usuario=$_POST["nu_usuario"];
	$nb_usuario=$_POST["nb_usuario"];
	$co_correo=$_POST["co_correo"];
	$co_clave=$_POST["co_clave"];
	

	$usuario = new Usuario();

	$usuario->setNu_usuario($nu_usuario);
	$usuario->setNb_usuario($nb_usuario);
	$usuario->setCo_correo($co_correo);
	$usuario->setCo_clave($co_clave);
	

	$operacionValida = $manejador->insertarUsuario($usuario);

	if($operacionValida){
		
		$condicion = "co_correo = '$co_correo'";
		$usuarios = $manejador->obtenerListaUsuario($condicion);
		
		$usuario = $usuarios[0];
		$_SESSION['nu_cliente'] = $usuario->getNu_usuario();
		$_SESSION['nb_cliente'] = $usuario->getNb_usuario();
		$_SESSION['co_correo'] = $usuario->getCo_correo();
		
		$mensaje="Bienvenido al sistema, haga click en..........?";
	}else{
		$mensaje="Error en parámetros";
	}

}

require_once "../vista/UsuarioRegistrar.php";

?>