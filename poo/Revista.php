<?php
include "Libro.php";

class Revista extends Libro{
    private $emision;
    public static $empresa = "Televisa";
    const precio = 50;

    public function setEmision($num){
        $this->emision = $num;
    }
    public function getPrecio(){
        return self::precio;
    }
}

echo Revista::$empresa;//Televisa

$revista = new Revista("Muy interesante",40);
$revista->getTitulo(); //Muy interesante
$revista->setEmision(2); //$revista->emison : 2
$revista;// Titulo = Muy interesante, Paginas = 40, emision = 2
?>