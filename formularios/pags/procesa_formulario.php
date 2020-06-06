<?php


//echo $_GET['correo'].$_GET['nombre'].$_GET['pregunta'];

if(isset($_POST['nombre']) && $_POST['nombre']!=""){
    enviarComentarios($_POST['nombre'],$_POST['correo'],$_POST['pregunta']);
}else{
    echo "No se ingresó el nombre";
}




function enviarComentarios($nombre, $correo, $pregunta){
    echo "enviando correo desde ".$correo. "De parte de ".$nombre. "con la duda ".$pregunta;

    //comunicarse con la base de datos


    echo "Enviado con éxito";
}

?>