<?php
    include("conexion.php");
    
    $consulta = "SELECT * FROM talleres";
    $query = mysql_query($consulta,$con);
    
    if (!$query) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: " . mysql_error();
        exit;
    }
    echo "<table border = 1>";


    while($reg = mysql_fetch_row($query)){
        echo"<tr>";
        echo"<br>";
        foreach ($reg as $valor) {
            echo "<td>",$valor,"</td>";
        }
    }
    echo "</table>";
    
    mysql_close();    
?>