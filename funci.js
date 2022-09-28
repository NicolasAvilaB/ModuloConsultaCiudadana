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
function Mostrarw(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#textow").fadeToggle("fast");
    $("#subtitulo").text("Mantenedor Registro de Personal");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}
function Mostrarx(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#textox").fadeToggle("fast");
    $("#subtitulo").text("Mantenedor de Sectores");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}

function Mostrary(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#textoy").fadeToggle("fast");
    $("#subtitulo").text("Mantenedor Tipos de Organización");
    $("#titulo_ayuda").animate({left: '11.5%'});
    v = valor;
}
function Mostrarz(valor)
{ 
    $("#items").fadeToggle("fast"); 
    $("#volver").fadeToggle("fast");
    $("#textoz").fadeToggle("fast");
    $("#subtitulo").text("Historial de Inicio Sesión");
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
    else if(v == 10){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#textow").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 11){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#textox").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 12){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#textoy").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
    else if(v == 13){
        $("#items").fadeToggle("fast");
        $("#volver").fadeToggle("fast");
        $("#textoz").fadeToggle("fast");
        $("#subtitulo").text("Todos");
        $("#titulo_ayuda").animate({left: '1%'});
    }
}

function validar(Formulario){
	if(document.form1.nombre.value==0){
   	alert("Advertencia: Campo Nombre de Usuario esta vacio");
	document.form1.nombre.focus();
	return false;
	}
	else if(document.form1.clave.value==0){
   	alert("Advertencia: Campo de Clave esta vacio");
	document.form1.clave.focus();
	return false;
	}
	else {
	return true;
	}
}

function valida_letras_numeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    if (tecla==8){
        return true;
    }

    patron =/[A-Za-z0-9@-@.-. ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);

}
function valida_letras_numeros_correo(e){
    tecla = (document.all) ? e.keyCode : e.which;

    if (tecla==8){
        return true;
    }

    patron =/[A-Za-z0-9 ]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);

}

function valida_letras(e){
    tecla = (document.all) ? e.keyCode : e.which;

    if (tecla==8){
        return true;
    }

    patron =/[A-Za-z0-9 ]/;
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

function mostrar_esconder_clave() {
    var x = document.getElementById("clave").type;
    if (x == 'text'){
        document.getElementById("clave").type = 'password';
        document.getElementById("ver").innerHTML= "Mostrar Contraseña";
    }else if(x=='password'){
        document.getElementById("clave").type = 'text';
        document.getElementById("ver").innerHTML= "Ocultar Contraseña";
    }
}

function volver(){
    window.location="login.php";
}

function recuperar_contrase(){
    window.location="recuperar_contraseña.php";
    location.href="recuperar_contraseña.php";
}

function inhabilitar(){
    return false
}
document.oncontextmenu=inhabilitar
