<?php
include "../pags/conexion.php";


/**
 * 
 * CRUD
 * Create
 * Read 
 * Update 
 * Delete 
 */
modificar_categoria($_POST['id'],$_POST['nombre'],$conexion);


function modificar_categoria($id,$nombre,$conexion){
    $sql = "UPDATE categorias SET nombre='$nombre' WHERE id = '$id'";
    if(mysqli_query($conexion,$sql)){
        header("Location:gestionar_categorias.php");
    }else{
        echo "error actualizando la categoría: ".mysqli_error($conexion);
    }
}

?>