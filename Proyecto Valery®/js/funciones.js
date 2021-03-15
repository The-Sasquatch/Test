
var mensaje = ' Por favor verifique los datos'



// valida los campos numericos con signos y puntos
function numerico(valor) {
cad = valor.toString();
for (var i=0; i<cad.length; i++) {
	var caracter = cad.charAt(i);
	if ( (caracter<"0" || caracter>"9") && caracter!="." && caracter!="-" ) return false;
}
return true;
}



// valida los campos numéricos sin signos y puntos
function solonumeros(valor) {
cad = valor.toString();
for (var i=0; i<cad.length; i++) {
	var caracter = cad.charAt(i);
	if (caracter<"0" || caracter>"9") return false;
}
return true;
}



// valida los campos con texto sin signos de puntuación
function sololetras(checkStr) {
var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnñopqrstuvwxyzáéíóú ";
var allValid = true;
for (i = 0; i < checkStr.length; i++) {
	ch = checkStr.charAt(i);
	for (j = 0; j < checkOK.length; j++)
	if (ch == checkOK.charAt(j))
		break;
	if (j == checkOK.length) {
		allValid = false;
		break;
	}
}
return allValid;
}



// valida los campos texto de tipo alfabético: minúsculas, mayúsculas, 
// signos de puntuación, números, operadores numéricos y caracteres especiales
function alfabetico(checkStr) {
var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnñopqrstuvwxyzáéíóú0123456789,.;:¡!¿?@|#$%&=<>+-*/()[]{} ";
var allValid = true;
for (i = 0; i < checkStr.length; i++) {
	ch = checkStr.charAt(i);
	for (j = 0; j < checkOK.length; j++)
	if (ch == checkOK.charAt(j))
		break;
	if (j == checkOK.length) {
		allValid = false;
		break;
	}
}
return allValid;
}



// valida los campos LOGIN y PASSWORD
function palabraclave(checkStr) {
var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz0123456789";
var allValid = true;
for (i = 0; i < checkStr.length; i++) {
	ch = checkStr.charAt(i);
	for (j = 0; j < checkOK.length; j++)
	if (ch == checkOK.charAt(j))
		break;
	if (j == checkOK.length) {
		allValid = false;
		break;
	}
}
return allValid;
}



// valida un campo tipo RADIO
function validaRadio(objeto){
	var opciones = document.getElementsByName(objeto);
	 
	var seleccionado = false;
	for(var i=0; i<opciones.length; i++) {    
		if(opciones[i].checked) {
			seleccionado = true;
			break;
		}
	}
	 
	if(!seleccionado) {
		return false;
	}
	
	return true;
}



// valida campo fecha
function valida_fecha(objeto){

	var fecha=objeto.value.split("/"); 
	
	if(fecha.length!=3) {
		alert('La fecha no tiene un formato válido (dd/mm/aaaa).'+mensaje)
		objeto.focus()
		objeto.select()
		return false;
	}
	
	if(parseInt(fecha[0])>31 || (parseInt(fecha[0])<1)){
		alert('El día no es correcto.'+mensaje);
		objeto.focus()
		objeto.select()
		return false;
	} 
	
	if(parseInt(fecha[1])>12 || (parseInt(fecha[1])<1)){
		alert('El mes no es correcto.'+mensaje);
		objeto.focus()
		objeto.select()
		return false;
	} 
	
	// Con esto compruebo que esté correctamente formada y verifico años bisiestos. 
	var mifecha = new Date(fecha[2],fecha[1]-parseInt(1),fecha[0])
	if(parseInt(fecha[0])!=parseInt(mifecha.getDate())){ 
		alert('La fecha introducida no es correcta.'+mensaje); 
		objeto.focus()
		objeto.select()
		return false; 
	}
	
	return true;
}



function validarEmail(campo) {
	var valor = campo.value;
	var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	return regex.test(valor);
}



// funciones AJAX
function ObjetoAjax(){
	var peticion = false;
	var  testPasado = false;
	try
	{
		// Firefox, Opera 8.0+, Safari
		peticion=new XMLHttpRequest();
		return peticion;
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			peticion=new ActiveXObject("Msxml2.XMLHTTP");
			return peticion;
		}
		catch (e)
		{
			try
			{
				peticion=new ActiveXObject("Microsoft.XMLHTTP");
				return peticion;
			}
			catch (e)
			{
				alert("Your browser does not support AJAX!");
				peticion=false;
				return peticion;
			}
		}
	}
	
	if (!peticion)
		alert("ERROR AL INICIALIZAR!");
}



// Carga datos de una pagina "url" en un area especifica "element_id"
function cargar(url, element_id) {
    var element =  document.getElementById(element_id);
	var peticion=ObjetoAjax();

	peticion.open("GET", url); 
    
    peticion.onreadystatechange = function() 
    {
        if (peticion.readyState == 4) 
        {
            element.innerHTML = peticion.responseText;
        } 
    } 
   peticion.send(null); 
}


// funciones JQuery

/*
Activar búsqueda en formulario a traves del campo filtro para desplegar la lista de valores - consulta asíncrona AJAX
Parámetro: pagina
Entrada: campo de texto (id=texto)
Salida: etiqueta div (id=lista)
Programa origen: Categoria_consultar.jsp
*/
function buscar(pagina){
	var parametros = {
		filtro: $("#texto").val()
	};
	var msg="<div class='w3-panel w3-light-grey'><p class='w3-xxlarge w3-center'>Por favor espere...<p></div>";
	$.ajax(
	{
		data: parametros,
		url: pagina,
		type: "post",
		beforeSend: function(){	$("#lista").html(msg); },
		success: function(response){ $("#lista").html(response); }
	});
}

