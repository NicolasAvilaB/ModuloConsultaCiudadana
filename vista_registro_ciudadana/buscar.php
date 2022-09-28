<?php
//Archivo de conexión a la base de datos

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla mmv001 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el apellido sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
$conexion = mysqli_connect('localhost','root','root','deptosocial'); 
	$consulta = mysqli_query($conexion, "Call Consulta_Rut('$consultaBusqueda')");

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);
    if ($consultaBusqueda === 0){
        $mensaje = "<p></p>";
    }elseif($filas === 0) {
		$mensaje = "<p><img src='../Imagenes/verde.png' width='42' height='42'>
</p>";
	}
	else{
	    $rut = $_GET["rut"];
        if($rut === $consultaBusqueda){
            $mensaje = "<p></p>";
        }else{
        $mensaje .= '
			<p>
			<img src="../Imagenes/rojo.png" width="42" height="42">
			<script> rut.setCustomValidity("Rut ya se encuentra registrado");</script>
			</p>';       
        }
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		//echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
	    //Fin while $resultados
     
	}; //Fin else $filas
    
};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;

?>
