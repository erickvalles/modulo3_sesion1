<?php
class Libro {
    //Atributos
    private $titulo;
    private $paginas;
    public $autores = [];

    //Constructor
    function __construct($title,$pages)
    {   
       $this->titulo = $title;
       $this->paginas = $pages;
    }
    //Métodos
    function getTitulo(){
        return $this->titulo;
    }
    function getPaginas(){
        return $this->paginas;
    }

    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

}
