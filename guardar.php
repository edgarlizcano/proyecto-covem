<?php
    include("conexion.php");
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $transaccion = $_POST['transaccion'];
    $montoTransaccion = $_POST['monto'];
    $montoInscripcion = $_POST['monto_inscripcion'];
    $participacion = $_POST['participacion'];
    $taller = $_POST['taller'];
    $valido = $_POST['valido'];
    $validado=0;
    
    if($valido){
        $validado=1;
    }
    $sql ="UPDATE Inscritos SET nombres='$nombres',apellidos='$apellidos',cedula='$cedula',correo='$correo',num_deposito='$transaccion',monto_deposito='$montoTransaccion',monto_inscripcion='$montoInscripcion',participacion='$participacion',id_taller='$taller',ins_valida='$validado' WHERE cedula='$cedula'";
    
    if ($conexion->query($sql) === TRUE) {
        header('Location:index.php');
    }else{
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
?>