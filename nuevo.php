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
    $sql ="INSERT INTO Inscritos (nombres,apellidos,cedula,correo,num_deposito,monto_deposito,monto_inscripcion,participacion,id_taller,ins_valida) VALUES('$nombres','$apellidos','$cedula','$correo','$transaccion','$montoTransaccion','$montoInscripcion','$participacion','$taller','$validado')";
    
    if ($conexion->query($sql) === TRUE) {
        header('Location:index.php');
    }else{
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
?>