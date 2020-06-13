<?php
include "conexion.php";

$sql = "UPDATE articulos SET nombre='PS5' WHERE id = '1'";

if(mysqli_query($conexion,$sql)){
    echo "se actualizó correctamente";
}else{
    echo "Error actualizando";
}

?>