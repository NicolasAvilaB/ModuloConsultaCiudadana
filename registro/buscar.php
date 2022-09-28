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
$conexion = mysqli_connect('localhost', 'cre37351_root', 'lacomunagana', 'cre37351_registroeleccion'); 
mysqli_set_charset($conexion,"utf8");
	$consulta = mysqli_query($conexion, "Call Consulta_Rut('$consultaBusqueda')");
	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);
    if ($consultaBusqueda === 0){
        $mensaje = "<p></p>";
    }
	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "<script> document.getElementById('resultadoBusqueda').style.backgroundColor = 'transparent';</script><p class= 'titulo3'>Nombre: <input type='text' class='nombre' id='nombre' name='nombre' style='text-align:center' placeholder='Ingrese Nombre...' size='30' onkeypress='return valida_letras(event)' maxlength='105' autocomplete='off'/> </p><p class= 'titulo3'>Lugar de Votación: <input list='list2' class='sector' id='sector' name='sector' type='text' style='text-align:center' placeholder='Ingrese o Busque Lugar de Votación...' size='30' onkeypress='return valida_letras(event)' maxlength='105' autocomplete='off'/>
<br></br><input type='submit' onclick='' id='gu' class='g' name='gu' value='Guardar'>";
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		//echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		$rut = "";
		$nombre = "";
		$direccion = "";
		while($resultados = mysqli_fetch_array($consulta)) {
			$rut = 	$resultados[0];		
			$nombre = $resultados[1];
			$direccion = $resultados[2];
			//Output
			

		};//Fin while $resultados
        $mensaje .= '<script> document.getElementById("resultadoBusqueda").style.backgroundColor = "#d9edf7"; </script><p>
			<img src="../Imagenes/rojo.png" width="42" height="42">
			<script> rut.setCustomValidity("Rut ya se encuentra registrado");</script>
			</p>' . '<p class= "titulo31">Rut: ' .$rut . '</p><p class= "titulo31">Nombre: ' .$nombre . '</p><p class= "titulo31">Esta persona votó en: '. $direccion.'</p>';
	}; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;

?>
