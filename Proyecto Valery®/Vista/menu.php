
<div class="w3-bar w3-border w3-blue">
	<a href="../Controlador/ControladorInicio.php" class="w3-bar-item w3-button w3-grey w3-padding-16">Inicio</a>
<?php

if(isset($_SESSION['nb_usuario'])){

?>
	<span class="w3-bar-item w3-padding-16">
	<b><?php echo $_SESSION['nb_usuario']; ?> Por favor Dale al boton de inicio</b>
	</span>

	<a href="../Controlador/ControladorLogout.php" class="w3-bar-item w3-button w3-right">
	<img src="../imagenes/logout.png" style="height: 28px;" class="w3-image" alt="Logout" title="Desconectarse">
	</a>
<?php

}else{
?>
	<a href="../Controlador/RegistrarUsuario.php" class="w3-bar-item w3-button w3-right">
	<img src="../imagenes/register.png" style="height: 28px;" class="w3-image" alt="Registrese" title="Registrese">
	</a>
	<a href="../Controlador/ControladorLogin.php" class="w3-bar-item w3-button w3-right">
	<img src="../imagenes/login.png" style="height: 28px;" class="w3-image" alt="Login" title="Login">
	</a>

<?php
}

?>
</div>
