<?php
include "conexion.php";

@mysqli_query($conexion,"SET NAMES 'utf8'");//@ sirve para ocultar errores que puedan elegir 
$sql = "INSERT INTO productos (nombre, precio) VALUES ('Dark Souls', '1900')";
if(mysqli_query($conexion, $sql)){
    echo "se insertó exitosamente";
}else{
    echo "Erro insertando ".mysqli_error($conexion);
}


?>