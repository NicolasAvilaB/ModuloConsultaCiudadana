<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<noscript>
  <META HTTP-EQUIV="Refresh" CONTENT="0;URL=java.html">
</noscript>
<article id="contenedor_carga">
	<article id="carga"></article>
</article>
<script src="./Imagenes/jquery_fade.min.js"></script>
<script src="./Imagenes/jquery-1.9.1.min.js"></script>
<script>
	window.onload = function(){
	var contenedor = document.getElementById('contenedor_carga');
	contenedor.style.visibility = 'hidden';
	contenedor.style.opacity = '0';
	var carg = document.getElementById('carga');
    carg.style.animationPlayState = "paused";
	}
</script>
<style type="text/css">
@import url("login.css");
</style>
<link href="login.css" rel="stylesheet" type="text/css">
<title>Registro Consulta Ciudadana - Municipalidad de Peralillo </title>
<body oncopy="return false" onpaste="return false" oncontextmenu="return false">
<img src="Imagenes/fondo_login_difuminado.jpg" id="fondo" alt=""/>
<script src="funci.js"> </script>
<?php
SESSION_START();
SESSION_UNSET();
SESSION_DESTROY();
?>
<p></p>
<img class="dis" src="./Imagenes/logomuni.png" alt="">
<form id="form1" class="form1" autocomplete="off"name="form1" action="login.php" method="POST" onSubmit="return validar(this)">
<aside class="cuadrado">
<p></p>
<p class= "titulo2">Registro Consulta Ciudadana</p>
</aside>
<p>&nbsp;</p>
<p class= "titulo3">Nombre:</p> <input type="text" class="nombre" id="nombre" name="nombre" style="text-align:center" placeholder="Ingrese Nombre de Usuario..." size="30" maxlength="50" autocomplete="off" onkeypress="return valida_letras_numeros(event)" autofocus/>
<p class= "titulo3sp">Clave: </p><input type="password" class="clave" id="clave" name="clave" style="text-align:center" placeholder="Ingrese Clave..." size="30" maxlength="50" autocomplete="off" onkeypress="return valida_letras_numeros(event)"/>
<p>&nbsp;</p>
<p>&nbsp;</p>
<aside class="elementos"><p class="ver" id="ver" onclick="mostrar_esconder_clave()">Mostrar Contraseña</p></aside>
<input type="submit" onclick="" id="gu" class="g" name="gu" value="Ingresar">
</p>
<p>
<?php
$var = "";
  if(isset($_POST["gu"])){
     	header("Content-Type: text/html;charset=utf-8");
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
	$clave = $_POST["clave"];
	$conversion1 = base64_encode($nombre);
	$conversion2 = base64_encode($clave);
	$conexion = mysqli_connect("localhost","cre37351_root","lacomunagana","cre37351_registroeleccion");
	mysqli_set_charset($conexion,"utf8");
	$consulta = mysqli_query($conexion, "Call Login('".$nombre."','".$clave."')");
	if (mysqli_fetch_assoc($consulta) == true)
	{
		include('./registro/functions.php');
		if ($resultset = getSQLResultSet("Call Consulta_Tipo_Usuario('".$nombre."','".$clave."')"))
		{
			while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
				$tipo_usuario = $row[0];
			}
			if ($tipo_usuario == "Administrador"){
				mysqli_free_result($consulta);
				mysqli_close($conexion);
				SESSION_START();
				$_SESSION['usuarios']=$conversion1;
				$_SESSION['claves']=$conversion2;
				$_SESSION['i']="Administrador";
				header("Location:./vista_registro_ciudadana/historial_org.php");
			}
			elseif ($tipo_usuario == "Operario"){
				mysqli_free_result($consulta);
				mysqli_close($conexion);
				SESSION_START();
				$_SESSION['usuarios']=$conversion1;
				$_SESSION['claves']=$conversion2;
				$_SESSION['i']="Operario";
				header("Location:./registro/registro.php");
			}
		}
	}
	else
	{
		$message2 = utf8_encode("Advertencia: Nombre de Usuario o Contraseña Son Incorrectos");
		$mensaje3alert = utf8_decode($message2);
		echo "<script type='text/javascript'>alert('$mensaje3alert');</script>";
		mysqli_free_result($consulta);
		mysqli_close($conexion);
	}
}
?>
<p class="titulo75">MUNICIPALIDAD DE PERALILLO</p>
<p class="copy"><a href='https://nicolas.systemchile.com' type='button' style="color:white;text-decoration: none;" class='btn btn-primary' target='_blank'>Copyright © 2019 | Diseñado por N.A.B para Muniperalillo</a></p>
</form>
</body>
</head>
</html>
