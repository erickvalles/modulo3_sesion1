<?php

/** 
 * do-> hacer algo
 * 
 * while -> mientras algo sea verdadero
*/
/*$numero = 50;

do{
    echo "hola $numero<br>";
    $numero++;
}while($numero <= 100);
*/
echo "--------------------<br>";

/**
 * Mientras algo se cumpla -> repite
 */
/*$numero2 = 50;
while($numero2<100){
    echo "hola $numero2<br>";
    $numero2++;//100
}

*/


/**
 * for -> desde  
 */

//$frutas = array("Manzana","Guayaba","Pera","sandía","melón");
/*
for($indice=0;$indice<sizeof($frutas);$indice++){
    echo $frutas[$indice]."<br>";
}
*/


/**
 * foreach -> para cada
 */
//                 0        1         2      3
//$frutas = array("Manzana","Guayaba","Pera","sandía","melón","Durazno");
/*
$indice = 0;
$tamFrutas = sizeof($frutas);//6
while($indice<$tamFrutas){
    echo $frutas[$indice]."<br>";
    $indice++;//6
}

*/

 /*foreach($frutas as $fruta){
     
    if($fruta=="Guayaba"){
         echo "Mi fruta favorita->";
     }
     echo $fruta."<br>";
 }*/


  
 $alumnos = array("Gerardo","Alejandro","Pepito","Rafael","Genaro","Víctor","Ana");
 $calificaciones = array(100,99,60,87,93,55);
//foreach
 echo "<table border='1'>";
 echo "<tr><td colspan='3'>NA = No existe la calificación</td></tr>";
 $numeroLista = 1;
 foreach($alumnos as $alumno){
    echo "<tr>
        <td>". $numeroLista ."</td><td>$alumno</td><td>";
        //$cal = ;
        if(isset($calificaciones[$numeroLista-1])){
            echo $calificaciones[$numeroLista-1];
        }else{
        
            echo "NA";
        }
        
        echo "</td>
        </tr>";
        $numeroLista++;
 }


 echo "</table>";

 //for
 echo "<table border='1'>";
 
 for($numeroLista = 1;$numeroLista<=sizeof($alumnos);$numeroLista++){
    echo "<tr>
        <td>$numeroLista</td><td>".$alumnos[$numeroLista-1]."</td>
        </tr>";
        
 }
 echo "</table>";



 

 echo "<table border='1'>"; 
 foreach($calificaciones as $calificacion){
     echo "<tr>";
     echo "<td>$calificacion</td>";
     echo "</tr>";
 }
 echo "</table>";




?>