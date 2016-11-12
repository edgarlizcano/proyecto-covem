function validar(){
    var busqueda = document.getElementById("busqueda").value;
    document.getElementById("mensaje").style.display = 'none';
    if (busqueda == null || busqueda.length == 0 || /^\s+$/.test(busqueda)||isNaN(busqueda)) {
        document.getElementById("mensaje").style.display = 'block';
        return false;   
    } 
    return true;
}


function comprobar(){
    document.getElementById("mensaje1").innerHTML="";
    document.getElementById("mensaje2").innerHTML="";
    document.getElementById("mensaje3").innerHTML="";
    document.getElementById("mensaje4").innerHTML="";
    document.getElementById("mensaje5").innerHTML="";
    document.getElementById("mensaje6").innerHTML="";
    document.getElementById("mensaje7").innerHTML="";
    document.getElementById("mensaje8").innerHTML="";
    document.getElementById("mensaje9").innerHTML="";

    var cedula = document.getElementById("cedula").value;
    var nombres = document.getElementById("nombres").value;
    var apellidos = document.getElementById("apellidos").value;
    var correo = document.getElementById("correo").value;
    var transaccion = document.getElementById("transaccion").value;
    var monto = document.getElementById("monto").value;
    var monto_inscripcion = document.getElementById("monto_inscripcion").value;
    var participacion = document.getElementById("participacion").value;
    var taller = document.getElementById("taller").value;
    var valido = document.getElementById("valido");
    
    if (cedula == null || cedula.length == 0 || /^\s+$/.test(cedula)||isNaN(cedula)) {
        document.getElementById("mensaje1").innerHTML="Rellene este campo correctamente";
        return false;
    }else if (nombres == null || nombres.length == 0 || /^\s+$/.test(nombres)) {
        document.getElementById("mensaje2").innerHTML="Rellene este campo correctamente";
        return false;
    }else if (apellidos == null || apellidos.length == 0 || /^\s+$/.test(apellidos)) {
        document.getElementById("mensaje3").innerHTML="Rellene este campo correctamente";
        return false;
    }else if( !(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/).test(correo) ) {
        document.getElementById("mensaje4").innerHTML="Rellene el correo correctamente";
        return false;
    }else if (transaccion == null || transaccion.length == 0 || /^\s+$/.test(transaccion)||isNaN(transaccion)) {
        document.getElementById("mensaje5").innerHTML="Rellene este campo correctamente";
        return false;
    }else if (monto == null || monto.length == 0 || /^\s+$/.test(monto)||isNaN(monto)) {
        document.getElementById("mensaje6").innerHTML="Rellene este campo correctamente";
        return false;
    }else if (monto_inscripcion == null || monto_inscripcion.length == 0 || /^\s+$/.test(monto_inscripcion)||isNaN(monto_inscripcion)) {
        document.getElementById("mensaje7").innerHTML="Rellene este campo correctamente";
        return false;
    }else if( participacion == null || participacion == 0 ) {
        document.getElementById("mensaje8").innerHTML="Seleccione el tipo de participación";
        return false;
    }else if( taller == null || taller == 0 ) {
        document.getElementById("mensaje9").innerHTML="Seleccione un taller";
        return false;
    }else if( !valido.checked ) {
        var r = confirm("La inscripción no ha sido validada, desea continuar?");
        if (r == false) {
            return false;
        }
    }
    return true;
}