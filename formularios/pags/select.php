<?php
include "conexion.php";

if(!$conexion){
    echo "No me pude conectar ".mysqli_error($conexion);
}else{
    $sql = "SELECT * FROM productos";
    if($datos = mysqli_query($conexion,$sql)){
        while($fila = mysqli_fetch_array($datos)){
            echo "<p>".$fila['id']." ".$fila['nombre'];
        }
    }else{
        echo "Hubo un error en la consulta ".mysqli_error($conexion);
    }
}
?>