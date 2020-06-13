<?php
include "conexion.php";

$sql = "DELETE FROM articulos where id = '1'";

if(mysqli_query($conexion,$sql)){
    echo "Eliminado exitosamente";
}else{
    echo "Error eliminando";
}

?>