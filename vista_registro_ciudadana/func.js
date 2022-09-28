var v = 0;
$(document).ready(function(){
    $("#ayuda").click(function(){
        $("#ayudas").fadeToggle();
    });
    $("#cerrar").click(function(){
        $("#ayudas").fadeToggle();
    });
});

$(document).ready(function(){
$("#busqueda_ayuda").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#items li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function Mostrar(valor) 
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto2").fadeToggle("fast");
    $("#subtitulo").text("Login");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrar2(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto22").fadeToggle("fast");
    $("#subtitulo").text("Menu");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrar3(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto3").fadeToggle("fast");
    $("#subtitulo").text("Registro Organizaciones Comunitarias");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrar4(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto4").fadeToggle("fast");
    $("#subtitulo").text("Historial Organizaciones Comunitarias");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrar5(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto5").fadeToggle("fast");
    $("#subtitulo").text("Solicitudes Comunitarias");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrar6(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto6").fadeToggle("fast");
    $("#subtitulo").text("Historial Solicitudes Comunitarias");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrar7(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto7").fadeToggle("fast");
    $("#subtitulo").text("Solicitudes Comunitarias (ANTERIORES)");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrar8(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto8").fadeToggle("fast");
    $("#subtitulo").text("Historial Solicitudes Comunitarias (ANTERIORES)");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}
function Mostrar9(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#texto9").fadeToggle("fast");
    $("#subtitulo").text("Modos de Trabajo");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Ocultar(){
    if (v == 1)
    {
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto2").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 2)
    {
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto22").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 3){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto3").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 4){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto4").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 5){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto5").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 6){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto6").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 7){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto7").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 8){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto8").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 9){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#texto9").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
}


function validar(Formulario){
	if(document.form1.rut.value==0){
   	alert("Advertencia: Campo Rut esta vacio");
	document.form1.rut.focus();
	return false;
	}
	else if(document.form1.nombre.value==0){
   	alert("Advertencia: Campo Nombre de Organizacion esta vacio");
	document.form1.nombre.focus();
	return false;
	}
    else if(document.form1.juntas.value==0){
   	alert("Advertencia: Seleccione un Tipo de Organizacion");
	document.form1.juntas.focus();
	return false;
	}  
    else if(document.form1.direccion.value==0){
   	alert("Advertencia: Campo Direccion esta vacio");
	document.form1.direccion.focus();
	return false;
	}
	else if(document.form1.telefono.value.length > 0){
     if (document.form1.telefono.value.length < 9){
   	        alert("Advertencia: Minimo de Numero para el 1° Telefono requerido es de 9 digitos");
        	document.form1.telefono.focus();
        	return false; 
        }
        else if(document.form1.se.value==0){
           	alert("Advertencia: Seleccione por lo menos un propietario para el 1° telefono");
        	document.form1.se.focus();
        	return false;
    	}
    	else if(document.form1.fecha.value==0){
           	alert("Advertencia: Ingrese Fecha de Organizacion");
        	document.form1.fecha.focus();
        	return false;
    	}
        else if(document.form1.cargo.value==0){
           	alert("Advertencia: Seleccione una Clasificacion");
        	document.form1.cargo.focus();
        	return false;
    	}
        else if(document.form1.directiva.value==0){
           	alert("Advertencia: Seleccione Estado de Directiva");
        	document.form1.directiva.focus();
        	return false;
    	}
        else if(document.form1.sector.value==0){
           	alert("Advertencia: Seleccione Sector de la Organizacion");
        	document.form1.sector.focus();
        	return false;
    	}
    	else {
        	return true;
    	}
	}
	else if(document.form1.telefono2.value.length > 0){
     if (document.form1.telefono2.value.length < 9){
   	        alert("Advertencia: Minimo de Numero del 2° Telefono requerido es de 9 digitos");
        	document.form1.telefono2.focus();
        	return false; 
        }
        else if(document.form1.se2.value==0){
           	alert("Advertencia: Seleccione por lo menos un propietario para el 2° telefono");
        	document.form1.se2.focus();
        	return false;
    	}
    	else if(document.form1.fecha.value==0){
           	alert("Advertencia: Ingrese Fecha de Organizacion");
        	document.form1.fecha.focus();
        	return false;
    	}
        else if(document.form1.cargo.value==0){
           	alert("Advertencia: Seleccione una Clasificacion");
        	document.form1.cargo.focus();
        	return false;
    	}
        else if(document.form1.directiva.value==0){
           	alert("Advertencia: Seleccione Estado de Directiva");
        	document.form1.directiva.focus();
        	return false;
    	}
        else if(document.form1.sector.value==0){
           	alert("Advertencia: Seleccione Sector de la Organizacion");
        	document.form1.sector.focus();
        	return false;
    	}
    	else {
        	return true;
    	}
	}
	else if(document.form1.telefono3.value.length > 0){
        if (document.form1.telefono3.value.length < 9){
   	        alert("Advertencia: Minimo de Numero del 3° Telefono requerido es de 9 digitos");
        	document.form1.telefono3.focus();
        	return false; 
        }
        else if(document.form1.se3.value==0){
           	alert("Advertencia: Seleccione por lo menos un propietario para el 3° telefono");
        	document.form1.se3.focus();
        	return false;
    	}
    	else if(document.form1.fecha.value==0){
           	alert("Advertencia: Ingrese Fecha de Organizacion");
        	document.form1.fecha.focus();
        	return false;
    	}
        else if(document.form1.cargo.value==0){
           	alert("Advertencia: Seleccione una Clasificacion");
        	document.form1.cargo.focus();
        	return false;
    	}
        else if(document.form1.directiva.value==0){
           	alert("Advertencia: Seleccione Estado de Directiva");
        	document.form1.directiva.focus();
        	return false;
    	}
        else if(document.form1.sector.value==0){
           	alert("Advertencia: Seleccione Sector de la Organizacion");
        	document.form1.sector.focus();
        	return false;
    	}
    	else {
        	return true;
    	}
	}
	else if(document.form1.fecha.value==0){
   	alert("Advertencia: Ingrese Fecha de Organizacion");
	document.form1.fecha.focus();
	return false;
	}
    else if(document.form1.cargo.value==0){
   	alert("Advertencia: Seleccione una Clasificacion");
	document.form1.cargo.focus();
	return false;
	}
    else if(document.form1.directiva.value==0){
   	alert("Advertencia: Seleccione Estado de Directiva");
	document.form1.directiva.focus();
	return false;
	}
    else if(document.form1.sector.value==0){
   	alert("Advertencia: Seleccione Sector de la Organizacion");
	document.form1.sector.focus();
	return false;
	}
	else {
	return true;
	}
}

function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { 
	rut.setCustomValidity("Rut Incompleto"); 
        return false;
    }
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { 
	rut.setCustomValidity("Rut Incorrecto");
	return false; 
    }
    
    if(document.form1.rut.value=="00000000-0" || document.form1.rut.value=="11111111-1" || document.form1.rut.value=="22222222-2" || document.form1.rut.value=="33333333-3" || document.form1.rut.value=="44444444-4" || document.form1.rut.value=="55555555-5" || document.form1.rut.value=="66666666-6" || document.form1.rut.value=="77777777-7" || document.form1.rut.value=="88888888-8" || document.form1.rut.value=="99999999-9"){
	rut.setCustomValidity("Rut Inválido");
	document.form1.rut.focus();
	return false;
    }

    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');

}

function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;


    if (tecla==8){
        return true;
    }
        

    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function valida_numero_rut(e){
    tecla = (document.all) ? e.keyCode : e.which;


    if (tecla==8){
        return true;
    }
        

    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function valida_letras(e){
    tecla = (document.all) ? e.keyCode : e.which;

    if (tecla==8){
        return true;
    }

    patron =/[A-Za-zÑ-ñÁ-Źá-ź(-) ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
    
}

function valida_letras_numeros(e){
    tecla = (document.all) ? e.keyCode : e.which;


    if (tecla==8){
        return true;
    }
        
    patron =/[A-Za-z0-9Á-Źá-ź,-, ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);

}

function validateMail(idMail)
{
	//Creamos un objeto 
	object=document.getElementById(idMail);
	valueForm=object.value;
	// Patron para el correo
	var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(valueForm.search(patron)==0)
	{
		//Mail correcto
        	email.setCustomValidity('');
		object.style.color="#000";
		return;
	}
	//Mail incorrecto
        email.setCustomValidity("Email Inválido");
	object.style.color="#f00";
}
function inhabilitar(){
    return false
}
document.oncontextmenu=inhabilitar
