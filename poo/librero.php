<?php
include("Libro.php");

$miLibro = new Libro("It", 600);
$otroLibro = new Libro("UML Classroom",206); //Momento 1, usando el constructor

$miLibro->getTitulo(); //It
$otroLibro->setTitulo("otro título");//Momento 2, mediante un método

$miLibro->autores = array("Stephen King"); // Momento 3, mediante una propiedad