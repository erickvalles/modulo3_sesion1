<?php
include "../pags/conexion.php";

eliminar($_GET['id'],$conexion);


function eliminar($id,$conexion){

    $sql = "DELETE FROM categorias WHERE id='$id'";

    if(mysqli_query($conexion,$sql)){
        header("Location:gestionar_categorias.php");
    }else{
        echo "Error eliminando ".mysqli_error($conexion);
    }

}


?>