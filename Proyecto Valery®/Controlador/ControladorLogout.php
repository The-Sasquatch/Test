<?php

session_start();

require_once "../modelo/ManejadorUsuario.php";
require_once "../modelo/ManejadorUsuario.php";

$manejador = new ManejadorUsuario();
$man_categoria = new ManejadorUsuario();


// destruir parametros de SESSION
$_SESSION['nb_usuario']  = "";
$_SESSION['co_correo']  = "";

unset($_SESSION['nb_usuario']);
unset($_SESSION['co_correo']);

session_destroy();




require_once "../vista/inicio.php";

?>