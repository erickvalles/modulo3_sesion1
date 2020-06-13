<?php
include "../pags/conexion.php";



if(isset($_POST['nombre']) && $_POST['nombre'] != ""){
    insertar_categoria($_POST['nombre'],$conexion);
}else{
    session_start();

    $_SESSION['error_categorias'] = "no puedes dejar el campo nombre vacío";

    header("Location:crear_categorias.php");
}



function insertar_categoria($nombre,$conexion){

    $sql = "INSERT INTO categorias(nombre) VALUES ('$nombre')";

    if(mysqli_query($conexion,$sql)){
        header("Location:gestionar_categorias.php");
    }else{
        echo "error ejecutando la consulta ".mysqli_error($conexion);
    }

}

?>