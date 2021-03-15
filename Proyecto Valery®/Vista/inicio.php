<!DOCTYPE html>
<html>
<head>
	<title>Valery®</title>
<link href="../css/w3.css" rel="stylesheet" type="text/css">
<script language='javascript' src='../js/jquery-3.5.1.js'></script>
<script language='javascript' src='../js/funciones.js'></script>
<script language='javascript' src='../js/cliente_ingresar.js'></script>
</head>
<body>

<?php

include "../vista/menu.php";
?> 

<?php

if(isset($_SESSION['nb_usuario'])){

?>

<div>
	<p>BIENVENID@ A VALERY® QUERID@ USUARI@: 	<span class="w3-bar-item w3-padding-16">
	<b><?php echo $_SESSION['nb_usuario']; ?></b>
	</span></p>
</div>


<?php

}else{
?>
<div>
	<p>Por favor ingrese sus datos o Registrese</p>
</div>


<?php
}
include "../vista/footer.php";
?> 


</body>
</html>