
function validar(forma) {
	
if(forma.co_correo.value == null || forma.co_correo.value == ''){
	alert('Correo es un campo obligatorio.'+mensaje)
	forma.co_correo.focus()
	return false
}
var numco_correo=forma.elements["co_correo"];
if(!validarEmail(numco_correo)){
	alert('Correo tiene el formato incorrecto.'+mensaje)
	forma.co_correo.focus()
	return false
}

if(forma.co_clave.value == null || forma.co_clave.value == ''){
	alert('Clave es un campo obligatorio.'+mensaje)
	forma.co_clave.focus()
	return false
}
var numco_clave=forma.elements["co_clave"];
if(!palabraclave(numco_clave.value)){
	alert('Clave es un campo alfanum�rico.'+mensaje)
	forma.co_clave.focus()
	return false
}


if(confirm("�Est� de acuerdo con la informaci�n ingresada?")){ forma.submit(); }


return true;

} 

