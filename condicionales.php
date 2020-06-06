<?php




//mostrar un texto solamente a los mayores de edad



echo "Cualquier persona puede verlo<br>";

/*
if($edad>=18){
    echo "Solamente los mayores de edad pueden verlo<br>";
}else{
    echo "no eres mayor de edad<br>";
}


echo "Termina la ejecución<br>";
*/
$edad = 35;

if($edad<18){
    echo "Eres menor de edad<br>";
}elseif($edad>=18 && $edad<=30){
    echo "Eres un chavorruco<br>";
}elseif($edad>30 && $edad<=60){ // 
    echo "Eres un adulto<br>";
}else{
    echo "Eres una persona de la tercera edad<br>";
}


// && -> y lógico


/**  
 * "y" lógico
 * A = true
 * B = true
 * 
 * c = A && B 
 * A B
 * 1 1 => 1
 * 1 0 => 0
 * 0 1 => 0
 * 0 0 => 0
 * 
 * "O" lógico 
 * A B
 * 1 1 => 1
 * 1 0 => 1
 * 0 1 => 1
 * 0 0 => 0
 * 
 * not !
 * A 
 * 1 -> 0
 * 0 -> 1
 */

// false -> 0 
// true -> 1
 $membresia = false;
 $egresadoUdg = true;

 if($membresia || $egresadoUdg){
     echo "bienvenido al evento<br><br>";
 }else{
     echo "no puedes ingresar<br>";
}




$diaSemana = 4;
$dia = "";
switch($diaSemana){
    case 1:
        $dia = "Lunes";
    break;
    case 2:
        $dia = "Martes";
    break;
    case 3:
        $dia = "Miércoles";
    break;
    case 4:
        $dia = "Jueves";
    break;
    case 5:
        $dia = "Viernes";
    break;
    case 6:
        $dia = "Sábado";
    break;
    case 7:
        $dia = "Domingo";
    break;
    default:
        $dia = "eso no es un día de la semana";
    break;
}
echo $dia;



?>