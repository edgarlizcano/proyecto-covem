<?php
    include("conexion.php");
    $busqueda=$_POST['busqueda'];
    
    $consulta = "SELECT * FROM Inscritos WHERE cedula =".$busqueda;
    $resultado = $conexion->query($consulta);
    if ($resultado->num_rows > 0)   {
        while($row = $resultado->fetch_assoc()){
            $cedula = $row["cedula"];    
            $nombre = $row["nombres"];
            $apellido = $row["apellidos"];
            $correo = $row["correo"];
            $transaccion = $row["num_deposito"];
        }    
    }else{
        header('Location:incluir.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Actualización de Registro</title>
        <meta charset="utf-8">
        <?php
            include("menu.html");
        ?>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <form action="guardar.php" method="post" onsubmit="return comprobar()">
                    <h2>Actualizar registro</h2>
                    <br>
                    <label for="">Cédula</label><br>
                    <input type="text" id="cedula" name="cedula" value="<?php echo $cedula ?>"/><br>
                    <label for="" id="mensaje1"></label><br>
                    
                    <label for="">Nombres</label><br>
                    <input type="text" id="nombres" name="nombres" value="<?php echo $nombre ?>"/><br>
                    <label for="" id="mensaje2"></label><br>
                    
                    <label for="">Apellidos</label><br>
                    <input type="text" name="apellidos" id="apellidos" value="<?php echo $apellido ?>"/><br>
                    <label for="" id="mensaje3"></label><br>
                    
                    <label for="">Correo</label><br>
                    <input type="text" id="correo" name="correo" value="<?php echo $correo ?>"/><br>
                    <label for="" id="mensaje4"></label><br>
                    
                    <label for="">Número de Transacción</label><br>
                    <input type="text" name="transacion" id="transaccion" value="<?php echo $transaccion ?>"/><br>
                    <label for="" id="mensaje5"></label><br>
                    
                    <label for="">Monto de Transacción</label><br>
                    <input type="text" name="monto" id="monto" value=""/><br>
                    <label for="" id="mensaje6"></label><br>
                    
                    <label for="">Monto de Inscripción</label><br>
                    <input type="text" name="monto_inscripcion" id="monto_inscripcion" value=""/><br>
                    <label for="" id="mensaje7"></label><br>
                    
                    <label for="">Tipo de Participación</label><br>
                    <select name="participacion" id="participacion">
                        <option value="0">Seleccione</option>
                        <option value="1">Ninguno</option>
                        <?php
                            $consulta = "SELECT id, descripcion FROM participacion";
                            $resultado = $conexion->query($consulta);
                            if ($resultado->num_rows > 0){
                                $combo1="";
                                while ($row = $resultado->fetch_assoc()) {
                                    $combo1.="<option value='".$row['id']."'>".$row['descripcion']."</option>";
                                }
                            }
                            echo $combo1;
                        ?>
                    </select><br><br>   
                    <label for="" id="mensaje8"></label><br>
                    
                    <label for="">Inscripción en Taller</label><br>
                    <select name="taller" id="taller">
                        <option value="0">Seleccione</option>
                        <option value="1">Ninguno</option>
                        <?php
                            $consulta = "SELECT id_taller, nombre_taller FROM talleres";
                            $resultado = $conexion->query($consulta);
                            if ($resultado->num_rows > 0){
                                $combo2="";
                                while ($row = $resultado->fetch_assoc()) {
                                    $combo2.="<option value='".$row['id_taller']."'>".$row['nombre_taller']."</option>";
                                }
                            }
                            $conexion->close();
                            echo $combo2;
                        ?>
                    </select><br>
                    <label for="" id="mensaje9"></label><br>
                    
                    <input type="checkbox" id="valido" name="valido"/>Validó inscripción <br>
                    <input type="submit" value="Guardar"/>
                </form>
            </div>
        </div>
    </body>
</html>