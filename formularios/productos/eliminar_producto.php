<?php
include "../pags/conexion.php";

eliminar($_GET['id'],$conexion);


function eliminar($id,$conexion){

    $sql = "DELETE FROM productos WHERE id='$id'";

    if(mysqli_query($conexion,$sql)){
        header("Location:gestionar_productos.php");
    }else{
        echo "Error eliminando ".mysqli_error($conexion);
    }

}


?>