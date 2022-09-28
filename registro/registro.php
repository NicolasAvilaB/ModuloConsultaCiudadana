<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
<noscript>
  <META HTTP-EQUIV="Refresh" CONTENT="0;URL=java.html">
</noscript>
<article id="contenedor_carga">
	<article id="carga"></article>
</article>
<script>
	window.onload = function(){
	var contenedor = document.getElementById('contenedor_carga');
	contenedor.style.visibility = 'hidden';
	contenedor.style.opacity = '0';
	var carg = document.getElementById('carga');
    	carg.style.animationPlayState = "paused"; 
	}
</script>
<script src="../Imagenes/jquery-1.9.1.min.js"></script>
<script> 
$(document).ready(function() {
    $("#resultadoBusqueda").html('');
document.getElementById('resultadoBusqueda').style.backgroundColor = 'transparent';
});
</script>

 <meta name="viewport" content="width=device-width, initial-scale=1"/> 
<style type="text/css">
@import url("registro.css");
</style>
<link href="registro.css" rel="stylesheet" type="text/css">
<!-- <img class="dis" src="Imagenes/logo.jpg" width="318" height="160"> -->
<title>Registro Consulta Ciudadana - Municipalidad de Peralillo </title>
<body oncopy="return false" onpaste="return false" oncontextmenu="return false">
<div> 
<script src="func.js"> </script>
<?php
header( "Content-Type: text/html;charset=utf-8" );
SESSION_START();
$nom=$_SESSION['usuarios'];
$cla=$_SESSION['claves'];
$identificador=$_SESSION['i'];
if($nom == "" && $cla == "" && $identificador == ""){
SESSION_START();
SESSION_UNSET();
SESSION_DESTROY();
header("Location:../login.php");
}
else{
    if ($identificador=="Operario"){
    }else{
        SESSION_START();
		SESSION_UNSET();
		SESSION_DESTROY();
        header("Location:../login.php");
    }
}
?>
<p></p>
<img class="dis" src="../Imagenes/logomuni.png">
<p class="titulo75">MUNICIPALIDAD DE PERALILLO</p>
<p class="copy">Copyright © 2019 | Diseñado por N.A.B para Muniperalillo</p>
<ul class="nav nav-pills nav-stacked">
    <ul class="dropdown">
        <li><a class="active" onclick="location.href = '#home'">Registro Consulta Ciudadana</a></li>
    </ul>
</ul>
</div>
<section>
<form id="form1" name="form1" action="registro.php" method="POST" onSubmit="return validar(this)">
<p class= "titulo2" align="center"> Registro Consulta Ciudadana</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p class= "titulo3">Buscar Rut: <input type="text" class="rut" id="rut" name="rut" style="text-align:center" placeholder="Ingrese Rut..." size="30" maxlength="10" autocomplete="off" required oninput="checkRut(this)" onkeyup="verificar();" /> </p>

<aside class="resultadoBusqueda" id="resultadoBusqueda"></aside>
<?php
header("Content-Type: text/html;charset=utf-8");
$conexion = mysqli_connect("localhost", "cre37351_root", "lacomunagana", "cre37351_registroeleccion") or die ("Error");
mysqli_set_charset($conexion,"utf8");
$ejecutar = mysqli_query($conexion," Call Consulta_Sectores");
mysqli_set_charset($conexion,"utf8");
?>
<datalist id="list2">
<?php while ($row = mysqli_fetch_array($ejecutar)) {  ?> 
<option><?php echo $row[0];?></option>
<?php } ?>
</datalist>

</p> 
<p>&nbsp;</p>
</p>
<p>
<?php
$var = "";
  if(isset($_POST["gu"])){
    include('functions.php');
    header("Content-Type: application/json; charset=UTF-8");
    header("Content-Type: text/html;charset=utf-8");
    $rut = $_POST["rut"];
	$nombre = ucwords($_POST["nombre"]);
	$nombre = ucwords(strtolower($nombre));
	$nombre = ucwords($_POST["nombre"]);
 	if (ctype_upper($nombre)) {
		$nombre = ucwords($_POST["nombre"]);
		$nombre = ucwords(strtolower($nombre));
    	} else {
		$nombre = ucwords($_POST["nombre"]);
		$nombre = ucwords(strtolower($nombre));
    	}
	$sector = $_POST["sector"];
	if ($resultset = getSQLResultSet("Call Consulta_Rut('$rut')")) {
	    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
		  $var = $row['0'];
 			$var1 = $row['1'];
 			$var2 = $row['2'];
		}
	}
	if ($rut == $var){
		echo "<script>alert('Nombre: ". $var1 ." Ya Vot贸 en: ". $var2."')</script>";
	}
	else{
		ejecutarSQLCommand("Call Ingresar_Voto ('$rut','$nombre','$sector')");
		echo "<script>alert('Datos ingresados correctamente')</script>";
		unset($rut, $nombre, $sector);
	}    
}
if(isset($_POST["ce"])){
		SESSION_START();
		SESSION_UNSET();
		SESSION_DESTROY();
		header("Location:../login.php");
	}
?>
<?php
header("Content-Type: text/html;charset=utf-8");
$conexion = mysqli_connect("localhost", "cre37351_root", "lacomunagana", "cre37351_registroeleccion") or die ("Error");
mysqli_set_charset($conexion,"utf8");
$ejecutar = mysqli_query($conexion,"Call Contar_Registros");
mysqli_set_charset($conexion,"utf8");
while ($row = mysqli_fetch_array($ejecutar)) {
 echo "<p class='titulo3'>Total Votos: " .$row[0]."</p>";
} ?>
</form>
<form id="form" class="form" name="form" method="POST">
<input type="submit" onclick="" id="ce" class="ce" name="ce" value="Cerrar Sesion">
</form>
</section>
</body>
</head>
</html>
