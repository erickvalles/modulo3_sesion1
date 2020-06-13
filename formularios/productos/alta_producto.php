<?php
include "../pags/conexion.php";

//aquí va una validación
if(isset($_POST['nombre']) && $_POST['nombre']!=""){

    crear_producto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['categoria'],$conexion);    
}else{
    header("Location:crear_productos.php");
}






function crear_producto($nombre,$descripcion,$precio,$categoria,$conexion){
    $sql = "INSERT INTO productos(nombre,descripcion,precio,categorias_id) VALUES ('$nombre','$descripcion','$precio','$categoria')";
    if(mysqli_query($conexion,$sql)){
        session_start();
        $_SESSION['producto_creado'] = "El producto se creó con éxito";

        header("Location:gestionar_productos.php");
    }else{
        //header("Location:https://www.google.com/search?q=".mysqli_error($conexion) );
        echo "Error al insertar producto".mysqli_error($conexion);
    }
}

?>
