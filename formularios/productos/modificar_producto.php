<?php
include "../pags/conexion.php";

//aquí va una validación
if(isset($_POST['nombre']) && $_POST['nombre']!=""){
    
    modificar_producto($_POST['id'],$_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria'],$conexion);    
}




function modificar_producto($id,$nombre,$descripcion,$precio,$categoria,$conexion){
    $sql = "UPDATE productos SET nombre='$nombre',descripcion='$descripcion',precio='$precio',categorias_id='$categoria' WHERE id = '$id'";
    
    
    if(mysqli_query($conexion,$sql)){
        header("Location:gestionar_productos.php");
    }else{
        //header("Location:https://www.google.com/search?q=".mysqli_error($conexion) );
        echo "Error al modificar el producto".mysqli_error($conexion);
    }
}

?>
