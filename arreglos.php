<?php

/**
 * Un tipo de dato que nos permite almacenar muchos datos de un mismo tipo en una sola variable.
 * Un conjunto de valores de un mismo tipo, guardados con un mismo nombre de variable.
 */

 $idiomas = array("Español","Inglés","Finlandés","Portugués","Francés","Chino mandarín","Italiano","Alemán");
 //para obtener el índice del último elemento de un arreglo = tam-1

 //echo print_r($idiomas);//print raw 
 //echo sizeof($idiomas);
// echo "Lo que está en la última posición de idiomas es: ".$idiomas[sizeof($idiomas)-1]."<br>";
// echo "lo que está en la primer posición de idiomas es:".$idiomas[0];

 $comidas[0] = "pozole";
 $comidas[1] = "tacos";
 $comidas[2] = "carnitas";
 $comidas[] = "Sopa de fideos";
 print_r($comidas);

 $dias[]="Lunes";
 $dias[]="Martes";
 $dias[]="Miércoles";
 $dias[]="Jueves";

 print_r($dias);


 $datosPersonales["nombre"] = "Erick";
 $datosPersonales["Edad"] = 30;
 $datosPersonales["Ciudad"] = "Ameca";


 $artistasFavoritos[] = "Sepultura";
 $artistasFavoritos[] = "Valentín Elizalde";
 $artistasFavoritos[] = "Till Lindermann";

 print_r($artistasFavoritos);

 //clave => valor

 //print_r($datosPersonales);

 //print(json_encode($datosPersonales));

 /**
  *  Crear arreglo artistas favoritos (índices)
  *  Crear arreglo datos personales de mi mascota (índices alfanuméricos).
  */

 

?>