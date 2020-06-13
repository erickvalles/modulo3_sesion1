<?php

define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASS","");
define("BD","tienda_juegos");

$conexion = mysqli_connect(SERVIDOR,USUARIO,PASS,BD);

mysqli_set_charset($conexion,'uft8');

if($conexion){
   // echo "Todo listo para trabajar";
}else{
    echo "No se pudo conectar al SGBD, verificar las credenciales. ".mysqli_error($conexion);
}

?>