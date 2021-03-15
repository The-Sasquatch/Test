<!DOCTYPE HTML>
<html>
<head>
<title>Valery®</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/w3.css" rel="stylesheet" type="text/css">
<script language='javascript' src='../js/jquery-3.5.1.js'></script>
<script language='javascript' src='../js/funciones.js'></script>
<script language='javascript' src='../js/UsuarioRegistrar.js'></script>
</head>

<body>
<?php
$titulo="registrese";

include "menu.php";

?>



<div class="w3-center">
	<h1 class="w3-center"><?php echo strtoupper($titulo); ?></h1>
</div>
	

<div class="w3-container w3-padding w3-light-grey">
<?php
include "UsuarioRegistrarFormulario.php";
?>
</div>



<?php
include "footer.php";
?>

</body>
</html>
