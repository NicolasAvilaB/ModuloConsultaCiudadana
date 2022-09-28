<!DOCTYPE html>
<html>
<head>
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
<?php
    header( "Content-Type: text/html;charset=utf-8" );
    if(isset($_GET["modificar"])){
        $editar_id = $_GET["modificar"];
    }
?>
<script> 
$(document).ready(function() {
    $("#resultadoBusqueda").html('');
});

function buscar() {
	var textoBusqueda = $("input#rut").val();
	if (textoBusqueda != "") {
		$.post("buscar.php?rut=<?php echo $editar_id; ?>", {valorBusqueda: textoBusqueda}, 		
		function(mensaje) {
			$("#resultadoBusqueda").html(mensaje);
		}); 
	} 
	else 
	{ 
		$("#resultadoBusqueda").html('');
    };
};

function verificar(){
    if(document.form1.rut.value==0){
        $("#resultadoBusqueda").html('');
    }
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1"/> 
<style type="text/css">
@import url("modificar_registro_org.css");
</style>
<link href="modificar_registro_org.css" rel="stylesheet" type="text/css">
<!-- <img class="dis" src="Imagenes/logo.jpg" width="318" height="160"> -->
<title>Registro Organizaciones Comunitarias - Municipalidad de Peralillo </title>
<body oncopy="return false" onpaste="return false" oncontextmenu="return false">
<div>
<script src="../Imagenes/jquery-1.9.1.min.js"></script>
<script src="func.js"> </script>
<button type="button" src="../Imagenes/help_negro.png" id="ayuda" class="ayuda" onclick="Mostrar_Ocultar();"><span class="tooltipayuda"></span></button>
<?php
header( "Content-Type: text/html;charset=utf-8" );
SESSION_START();
$n = $_SESSION['usua'];
$c = $_SESSION['cla'];
$io = $_SESSION['is'];
if($n == "" && $c == "" && $io == ""){
SESSION_START();
SESSION_UNSET();
SESSION_DESTROY();
header("Location:../login.php");
}
else{
    if ($io=="Operario"){
    }else{
        SESSION_START();
		SESSION_UNSET();
		SESSION_DESTROY();
        header("Location:../login.php");
    }
}
#$usuario=$_GET['nombre_usuario'];
#$clave=$_GET['clave_usuario'];
#$conexion = mysqli_connect("systemchile.com","cre37351_root","lacomunagana","cre37351_deptosocial") or die ("Error");
#mysqli_set_charset($conexion,"utf8");
#$ejecutar = mysqli_query($conexion,"Call Login('".$usuario."','".$clave."')"); 
#$fa = mysqli_fetch_array($ejecutar);
#$nm = $fa[0];
#$cl = $fa[1];
#if ($usuario == $nm && $clave == $cl){
#}
#else{
#header("Location:../login.php");
#}
#?nombre_usuario=<?php echo $usuario = $_GET['nombre_usuario'];?#>&clave_usuario=<?php echo $clave = $_GET['clave_usuario'];
?>
<p></p>
<img class="dis" src="../Imagenes/logomuni.png">
<p class="titulo75">MUNICIPALIDAD DE PERALILLO</p>
<p class="copy">Copyright © 2019 | Diseñado por N.A.B para Muniperalillo</p>
<ul class="nav nav-pills nav-stacked">
  <li><a onclick="location.href = 'historial_org.php'">Historial Organizaciones Com.</a></li>
  <li><a onclick="location.href = '../menu.php'">Volver al Menu</a></li>
</ul>
</div>
<section>
    <?php
    header( "Content-Type: text/html;charset=utf-8" );
    $conexion = mysqli_connect("localhost","root","root","deptosocial") or die ("Error");
    mysqli_set_charset($conexion,"utf8");
    if(isset($_GET["modificar"])){
        $editar_id = $_GET["modificar"];
        $ejecutar = mysqli_query($conexion, "Call Buscar_Rut_Registro_Org('".$editar_id."')");
        $fila = mysqli_fetch_array($ejecutar);
        $doctorwho = $fila[0];
        $a = $fila[1];
    	$b = $fila[2];
    	$c = $fila[3];
    	$t = $fila[4];
    	$t2 = $fila[5];
    	$t3 = $fila[6];
    	$t4 = $fila[7];
    	$t5 = $fila[8];
    	$g = $fila[9];
    	$h = $fila[10];
    	$i = $fila[11];
    	$j = $fila[12];
    	$valor_a = $t;
    	$valor_b = $t2;
    	$valor_c = $t3;
    	$valor_d = $t4;
    	$valor_e = $t5;
    	$valor_cl = $h;
    	$valor_estad = $i;
    	$t = str_replace("Presidente/a - ", "", $t);
    	$t = str_replace("Secretario/a - ", "", $t);
    	$t = str_replace("Tesorero/a - ", "", $t);
    	$t = str_replace("Director1 - ", "", $t);
    	$t = str_replace("Director2 - ", "", $t);
    	$t = str_replace(" - 0", "", $t);
    	$t = str_replace(" - ", "", $t);
    	$t = str_replace("- 0", "", $t);
	    $t2 = str_replace("Presidente/a - ", "", $t2);
    	$t2 = str_replace("Secretario/a - ", "", $t2);
    	$t2 = str_replace("Tesorero/a - ", "", $t2);
    	$t2 = str_replace("Director1 - ", "", $t2);
    	$t2 = str_replace("Director2 - ", "", $t2);
    	$t2 = str_replace(" - 0", "", $t2);
    	$t2 = str_replace(" - ", "", $t2);
    	$t2 = str_replace("- 0", "", $t2);
	    $t3 = str_replace("Presidente/a - ", "", $t3);
    	$t3 = str_replace("Secretario/a - ", "", $t3);
    	$t3 = str_replace("Tesorero/a - ", "", $t3);
        $t3 = str_replace("Director1 - ", "", $t3);
    	$t3 = str_replace("Director2 - ", "", $t3);
    	$t3 = str_replace(" - 0", "", $t3);
    	$t3 = str_replace(" - ", "", $t3);
    	$t3 = str_replace("- 0", "", $t3);
    	$t4 = str_replace("Presidente/a - ", "", $t4);
    	$t4 = str_replace("Secretario/a - ", "", $t4);
    	$t4 = str_replace("Tesorero/a - ", "", $t4);
        $t4 = str_replace("Director1 - ", "", $t4);
    	$t4 = str_replace("Director2 - ", "", $t4);
    	$t4 = str_replace(" - 0", "", $t4);
    	$t4 = str_replace(" - ", "", $t4);
    	$t4 = str_replace("- 0", "", $t4);
    	$t5 = str_replace("Presidente/a - ", "", $t5);
    	$t5 = str_replace("Secretario/a - ", "", $t5);
    	$t5 = str_replace("Tesorero/a - ", "", $t5);
        $t5 = str_replace("Director1 - ", "", $t5);
    	$t5 = str_replace("Director2 - ", "", $t5);
    	$t5 = str_replace(" - 0", "", $t5);
    	$t5 = str_replace(" - ", "", $t5);
    	$t5 = str_replace("- 0", "", $t5);
    	$d = $t;
    	$e = $t2;
    	$f = $t3;
    	$d1 = $t4;
    	$e1 = $t5;
    	
    }
?>
<form id="form1" name="form1" action="modificar_registro_org.php" method="POST" onSubmit="return validar(this)">
<p class= "titulo2" align="center"> Modificar Organizaciones Comunitaria</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p class= "titulo3">Rut: <input type="text" class="rut" id="rut" name="rut" style="text-align:center" placeholder="Ingrese Rut de Organizacion..." size="30" maxlength="10" autocomplete="off" required oninput="checkRut(this)" onkeyup="verificar();" onblur="buscar();" value="<?php echo $doctorwho; ?>"/> </p>

<p class= "titulo3">Nombre: <input type="text" class="nombre" id="nombre" name="nombre" style="text-align:center" placeholder="Ingrese Nombre Organizacion..." size="30" onkeypress="return valida_letras(event)" maxlength="200" autocomplete="off"  value="<?php echo $a; ?>"/> </p>

<p class= "titulo3">Tipo Organizacion: <input list="list" class="juntas" id="juntas" name="juntas" type="text" style="text-align:center" placeholder="Ingrese y/o Busque Tipo Organizacion..." size="30" onkeypress="return valida_letras(event)" maxlength="100" autocomplete="off"  value="<?php echo $b; ?>"/>
<?php
header("Content-Type: text/html;charset=utf-8");
$conexion = mysqli_connect("localhost","root","root","deptosocial") or die ("Error");
mysqli_set_charset($conexion,"utf8");
$ejecutar = mysqli_query($conexion," Call Consulta_Organizacion");
mysqli_set_charset($conexion,"utf8");
?>
<datalist id="list">
<?php while ($row = mysqli_fetch_array($ejecutar)) { ?> 
<option><?php echo $row[0];?></option>
<?php } ?>
</datalist>
</p>

<p class= "titulo3">Lugar de Reunion: <input type="text" class="direccion" id="direccion" name="direccion" style="text-align:center" placeholder="Ingrese Lugar de Reunion..." size="30" onkeypress="return valida_letras_numeros(event)" maxlength="200"  autocomplete="off" value="<?php echo $c; ?>"/>  </p>

<p class= "titulo3">Telefono: <input type="text" class="telefono" id="telefono" name="telefono" style="text-align:center" placeholder="Ingrese Nombre y Telefono Usuario..." size="30" onkeypress="return valida_letras_numeros(event)" maxlength="70"  autocomplete="off" value="<?php echo $d; ?>"/>
<select class="se" id="se" name="se">
    <?php
        if (strpos($valor_a, 'Presidente/a') !== false)
    	{
           echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a" selected>Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_a, 'Secretario/a') !== false)
        {
            echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a" selected>Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_a, 'Tesorero/a') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
          elseif(strpos($valor_c, 'Director1') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1" selected>Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_c, 'Director2') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2" selected>Director2</option>';
        }
        else{
            echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
    ?>
  
</select> </p>

<p class= "titulo3">Telefono 2: <input type="text" class="telefono2" id="telefono2" name="telefono2" style="text-align:center" placeholder="Ingrese Nombre y Telefono Usuario..." size="30" onkeypress="return valida_letras_numeros(event)" maxlength="70"  autocomplete="off" value="<?php echo $e; ?>"/>
<select class="se2" id="se2" name="se2">
    <?php
     if (strpos($valor_b, 'Presidente/a') !== false)
    	{
           echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a" selected>Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_b, 'Secretario/a') !== false)
        {
            echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a" selected>Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_b, 'Tesorero/a') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
          elseif(strpos($valor_c, 'Director1') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1" selected>Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_c, 'Director2') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2" selected>Director2</option>';
        }
        else{
             echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        ?>
</select> </p>

<p class= "titulo3">Telefono 3: <input type="text" class="telefono3" id="telefono3" name="telefono3" style="text-align:center" placeholder="Ingrese Nombre y Telefono Usuario..." size="30" onkeypress="return valida_letras_numeros(event)" maxlength="70"  autocomplete="off" value="<?php echo $f; ?>"/><select class="se3" id="se3" name="se3">
   <?php
     if (strpos($valor_c, 'Presidente/a') !== false)
    	{
           echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a" selected>Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_c, 'Secretario/a') !== false)
        {
            echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a" selected>Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_c, 'Tesorero/a') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_c, 'Director1') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1" selected>Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_c, 'Director2') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2" selected>Director2</option>';
        }
        else{
             echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';

        }
        ?>
</select> </p>

<p class= "titulo3">Telefono 4: <input type="text" class="telefono4" id="telefono4" name="telefono4" style="text-align:center" placeholder="Ingrese Nombre y Telefono Usuario..." size="30" onkeypress="return valida_letras_numeros(event)" maxlength="70"  autocomplete="off" value="<?php echo $d1; ?>"/><select class="se4" id="se4" name="se4">
   <?php
     if (strpos($valor_d, 'Presidente/a') !== false)
    	{
           echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a" selected>Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_d, 'Secretario/a') !== false)
        {
            echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a" selected>Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_d, 'Tesorero/a') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_d, 'Director1') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1" selected>Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_d, 'Director2') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2" selected>Director2</option>';
        }
        else{
             echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';

        }
        ?>
</select> </p>

<p class= "titulo3">Telefono 5: <input type="text" class="telefono5" id="telefono5" name="telefono5" style="text-align:center" placeholder="Ingrese Nombre y Telefono Usuario..." size="30" onkeypress="return valida_letras_numeros(event)" maxlength="70"  autocomplete="off" value="<?php echo $e1; ?>"/><select class="se5" id="se5" name="se5">
   <?php
     if (strpos($valor_e, 'Presidente/a') !== false)
    	{
           echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a" selected>Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_e, 'Secretario/a') !== false)
        {
            echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a" selected>Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_e, 'Tesorero/a') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_e, 'Director1') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1" selected>Director1</option>
                <option value="Director2">Director2</option>';
        }
        elseif(strpos($valor_e, 'Director2') !== false)
        {
               echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a" selected>Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                 <option value="Director1">Director1</option>
                <option value="Director2" selected>Director2</option>';
        }
        else{
             echo '<option value="">Propietario de Telefono...</option>
                <option value="Presidente/a">Presidente/a</option>
                <option value="Tesorero/a">Tesorero/a</option>
                <option value="Secretario/a">Secretario/a</option>
                <option value="Director1">Director1</option>
                <option value="Director2">Director2</option>';

        }
        ?>
</select> </p>

<p class= "titulo3">Fecha Origen: <input type="date" class="fecha" id="fecha" name="fecha" style="text-align:center" placeholder="Ingrese Fecha..." size="30" maxlength="10" step="1" min="1900-01-01" max="2100-12-31" autocomplete="off" value="<?php echo $g; ?>"/> </p>

<p class= "titulo3">Clasificacion: <select class="cargo" id="cargo" name="cargo">
    <?php
        if(strpos($valor_cl, 'Territoriales') !== false)
        {
               echo ' <option value="">Seleccione Clasificación...</option>
                <option value="Territoriales" selected>Territoriales</option>
             <option value="Funcionales">Funcionales</option>';
        }
        else if(strpos($valor_cl, 'Funcionales') !== false){
            echo ' <option value="">Seleccione Clasificación...</option>
                <option value="Territoriales">Territoriales</option>
             <option value="Funcionales" selected>Funcionales</option>';
        }
        else{
            echo ' <option value="">Seleccione Clasificación...</option>
                <option value="Territoriales">Territoriales</option>
             <option value="Funcionales">Funcionales</option>';
        }
  ?>
</select> </p>

<p class= "titulo3">Estado Directiva: <select class="directiva" id="directiva" name="directiva">
    <?php
    if($valor_estad === 'Vigente')
        {
             echo ' <option value="">Seleccione Estado Directiva...</option>
              <option value="Vigente" selected>Vigente</option>
              <option value="No Vigente">No Vigente</option>';
        }
        elseif($valor_estad === 'No Vigente')
        {
              echo ' <option value="">Seleccione Estado Directiva...</option>
              <option value="Vigente">Vigente</option>
              <option value="No Vigente" selected>No Vigente</option>';
        }
        else{
            echo ' <option value="">Seleccione Estado Directiva...</option>
  <option value="Vigente">Vigente</option>
  <option value="No Vigente">No Vigente</option>';
        }
 
    
    ?>
</select> </p>
<!--sectores -->

<p class= "titulo3">Sector: <input list="list2" class="sector" id="sector" name="sector" type="text" style="text-align:center" placeholder="Ingrese y/o Busque Tipo Organizacion..." size="30" onkeypress="return valida_letras(event)" maxlength="100" autocomplete="off" value="<?php echo $j; ?>"/>
<?php
header("Content-Type: text/html;charset=utf-8");
$conexion = mysqli_connect("localhost","root","root","deptosocial") or die ("Error");
mysqli_set_charset($conexion,"utf8");
$ejecutar = mysqli_query($conexion," Call Consulta_Sectores");
mysqli_set_charset($conexion,"utf8");
?>
<datalist id="list2">
<?php while ($row = mysqli_fetch_array($ejecutar)) {  ?> 
<option><?php echo $row[0] . ' - ' . $row[1];?></option>
<?php } ?>
</datalist>

</p> 
<p>&nbsp;</p>
<input type="submit" onclick="" id="gu" class="g" name="gu" value="Guardar">
<aside class="resultadoBusqueda" id="resultadoBusqueda"></aside>

</p>
<p>
<?php
$var = "";
  if(isset($_POST["gu"])){
     	header("Content-Type: application/json; charset=UTF-8");
     	header("Content-Type: text/html;charset=utf-8");
     	include('functions.php');
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
	$juntas = $_POST["juntas"];
	$direccion = ucwords($_POST["direccion"]);
	$direccion = ucwords(strtolower($direccion));
	$direccion = ucwords($_POST["direccion"]);
 	if (ctype_upper($direccion)) {
		$direccion = ucwords($_POST["direccion"]);
		$direccion = ucwords(strtolower($direccion));
    	} else {
		$direccion = ucwords($_POST["direccion"]);
		$direccion = ucwords(strtolower($direccion));
    	}
	$telefono= $_POST["telefono"];
	$telefono = ucwords($_POST["telefono"]);
	$telefono = ucwords(strtolower($telefono));
	$telefono = ucwords($_POST["telefono"]);
 	if (ctype_upper($telefono)) {
		$telefono = ucwords($_POST["telefono"]);
		$telefono = ucwords(strtolower($telefono));
    } else {
		$telefono = ucwords($_POST["telefono"]);
		$telefono = ucwords(strtolower($telefono));
    }
	$telefono2= $_POST["telefono2"];
	$telefono2 = ucwords($_POST["telefono2"]);
	$telefono2 = ucwords(strtolower($telefono2));
	$telefono2 = ucwords($_POST["telefono2"]);
 	if (ctype_upper($telefono2)) {
		$telefono2 = ucwords($_POST["telefono2"]);
		$telefono2 = ucwords(strtolower($telefono2));
    } else {
		$telefono2 = ucwords($_POST["telefono2"]);
		$telefono2 = ucwords(strtolower($telefono2));
    }
	$telefono3= $_POST["telefono3"];
	$telefono3 = ucwords($_POST["telefono3"]);
	$telefono3 = ucwords(strtolower($telefono3));
	$telefono3 = ucwords($_POST["telefono3"]);
 	if (ctype_upper($telefono3)) {
		$telefono3 = ucwords($_POST["telefono3"]);
		$telefono3 = ucwords(strtolower($telefono3));
    } else {
		$telefono3 = ucwords($_POST["telefono3"]);
		$telefono3 = ucwords(strtolower($telefono3));
    }
    $telefono4= $_POST["telefono4"];
	$telefono4 = ucwords($_POST["telefono4"]);
	$telefono4 = ucwords(strtolower($telefono4));
	$telefono4 = ucwords($_POST["telefono4"]);
 	if (ctype_upper($telefono4)) {
		$telefono4 = ucwords($_POST["telefono4"]);
		$telefono4 = ucwords(strtolower($telefono4));
    } else {
		$telefono4 = ucwords($_POST["telefono4"]);
		$telefono4 = ucwords(strtolower($telefono4));
    }
    $telefono5= $_POST["telefono5"];
	$telefono5 = ucwords($_POST["telefono5"]);
	$telefono5 = ucwords(strtolower($telefono5));
	$telefono5 = ucwords($_POST["telefono5"]);
 	if (ctype_upper($telefono5)) {
		$telefono5 = ucwords($_POST["telefono5"]);
		$telefono5 = ucwords(strtolower($telefono5));
    } else {
		$telefono5 = ucwords($_POST["telefono5"]);
		$telefono5 = ucwords(strtolower($telefono5));
    }
	$se= $_POST["se"];
	$se2= $_POST["se2"];
	$se3= $_POST["se3"];
	$se4= $_POST["se4"];
	$se5= $_POST["se5"];
	$fecha = $_POST["fecha"];
	$clasificacion = $_POST["cargo"];
	$directiva = $_POST["directiva"];
	$sector = $_POST["sector"];
	    if ($telefono == ""){
	        $telefono = "0";
	    }
	    if ($telefono2 == ""){
	        $telefono2 = "0";
	    }
	    if ($telefono3 == ""){
	        $telefono3 = "0";
	    }
	    if ($telefono4 == ""){
	        $telefono4 = "0";
	    }
	    if ($telefono5 == ""){
	        $telefono5 = "0";
	    }
ejecutarSQLCommand("Call Modificar_Registro_Organizacion ('$nombre','$juntas','$direccion','$se - $telefono','$se2 - $telefono2','$se3 - $telefono3','$se4 - $telefono4','$se5 - $telefono5','$fecha','$clasificacion','$directiva','$sector','$rut')");
		echo "<script>alert('Datos modificados correctamente')</script>";
		echo "<script language=Javascript> location.href=\"historial_org.php\"; </script>"; 
}
?>
</section>
<article class="ayudas" id="ayudas">
<article class="cuadrado2" id="cuadrado2">
<button type="button" src="../Imagenes/regresar.png" id="volver" class="volver" onclick="Ocultar();"><span class="tooltipvolver"></span></button><p class="titulo_ayuda" id="titulo_ayuda">Ayuda</p>
<input type="text" class="busqueda_ayuda" id="busqueda_ayuda" name="busqueda_ayuda" style="text-align:center" placeholder="Buscar en la Ayuda..." size="30" maxlength="50" autocomplete="off"/> <button type="button" class="cerrar" id="cerrar">x<span class="tooltipcerrar"></span></button>
<i class="fa fa-search"></i>
</article>
<article class="contenido" id="contenido">
    <article class="div_info_oculto" id="texto2">
    <iframe class="traeayuda" src="../ayuda/texto_ayuda_login.html"></iframe>
    </article>
    <article class="div_info_oculto" id="texto22">
    <iframe class="traeayuda" src="../ayuda/menu.html"></iframe>
    </article>
    <article class="div_info_oculto" id="texto3">
    <iframe class="traeayuda2" src="../ayuda/registro_organizaciones_com.html"></iframe>
    </article>
     <article class="div_info_oculto" id="texto4">
    <iframe class="traeayuda2" src="../ayuda/historial_org.html"></iframe>
    </article>
     <article class="div_info_oculto" id="texto5">
    <iframe class="traeayuda" src="../ayuda/solicitud_com.html"></iframe>
    </article>
     <article class="div_info_oculto" id="texto6">
    <iframe class="traeayuda2" src="../ayuda/historial_sol.html"></iframe>
    </article>
     <article class="div_info_oculto" id="texto7">
    <iframe class="traeayuda2" src="../ayuda/solicitud_com_anterior.html"></iframe>
    </article>
     <article class="div_info_oculto" id="texto8">
    <iframe class="traeayuda2" src="../ayuda/historial_solicitud_anterior.html"></iframe>
    </article>
    <article class="div_info_oculto" id="texto9">
    <iframe class="traeayuda" src="../ayuda/modotrabajo.html"></iframe>
    </article>
    <p id="subtitulo" class="subtitulo">Todos</p>
    
    <ul id="items" class="items">
         <p>&nbsp;</p>
				<li>
                    <a class="seleccion" onclick="Mostrar('1');"><img class="icono" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Objetivo e Ingreso Sesión</span></a>
				</li>
			 
				<li>
                    <a class="item2" onclick="Mostrar2('2');"><img class="icono" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Menu</span></a>
				</li>
				<li>
                    <a class="item3" onclick="Mostrar3('3');"><img class="icono" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Registros Organizaciones Com.</span></a>
				</li>
				<li>
                    <a class="item4" onclick="Mostrar4('4');"><img class="icono" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Historial Organizaciones Com.</span></a>
				</li>
				<li>
                    <a class="item5" onclick="Mostrar5('5');"><img class="icono" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Solicitudes Comunitarias</span></a>
				</li>
				<li>
                    <a class="item6" onclick="Mostrar6('6');"><img class="icono" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Historial Solicitudes Com.</span></a>
				</li>
				<li>
                    <a class="item7" onclick="Mostrar7('7');"><img class="icono2" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Solicitudes Com. (ANTERIORES)</span></a>
				</li>
				<li>
                    <a class="item8" onclick="Mostrar8('8');"><img class="icono3" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Historial Solicitudes Com. (ANTERIORES)</span></a>
				</li>
				<li>
                    <a class="item9" onclick="Mostrar9('9');"><img class="icono" src="../Imagenes/icono_ayuda.png" alt=""></img><span class="letras">Modos de Trabajo</span></a>
				</li>
			</ul>
   <p>&nbsp;</p>
</article>
</article>
</body>
</head>
</html>
