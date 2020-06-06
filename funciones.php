<?php


$amigos = array("Gerardo","Alejandro","Pepito","Rafael","Genaro","Víctor","Ana");

foreach ($amigos as $amigo){
    echo invitar($amigo);
}
/**
 * invitar a 5 amigos a tu fiesta
 */


function invitar($nombre){

    
    return "Hola $nombre, te invito a mi fiesta<br>";

}

?>