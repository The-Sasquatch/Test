
<div class='w3-padding'>
	<div class='w3-card-4'>
		<div class='w3-container w3-indigo'>
		<p class='w3-center'>Ingrese los datos en el formulario y presione Aceptar</p>
		</div>
	</div>

<form name='UsuarioRegistrar' method='post' action="RegistrarUsuario.php" >
<input name='opcion' type='hidden' value='1'>
<input name='nu_usuario' type='hidden' value='<?php echo $nu_usuario; ?>'>

	

	<p>
	<label>Nombre y Apellido del Usuario</label>
	<input name='nb_usuario' value='' maxlength='50' type='text' class='w3-input w3-border'>
	</p>

	<p>
	<label>Correo</label>
	<input name='co_correo' value='' maxlength='50' type='email' class='w3-input w3-border'>
	</p>

	<p>
	<label>Clave</label>
	<input name='co_clave' value='' maxlength='15' type='password' class='w3-input w3-border'>
	</p>

	<p class='w3-center'>
	<input name='aceptar' value='Aceptar' type='button' class='w3-btn w3-indigo' onClick='validar(document.UsuarioRegistrar)' >
	</p>

</form>

	

</div>

