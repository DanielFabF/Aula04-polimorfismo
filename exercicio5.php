<?php

abstract class FormaGeometrica{

    abstract function calcularArea();
}

class Circulo extends FormaGeometrica{
    public float $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        echo "A área do circulo é: " . ($this->raio * $this->raio) * 3.14 . '<br>';
    }
}

class Retangulo extends FormaGeometrica{
    public float $base;
    public float $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        echo "A área do retangulo é: " . $this->base * $this->altura . '<br>';
    }
}


$circulo = new circulo(4);
$circulo->calcularArea();
echo "<br>";
$retangulo = new retangulo(8, 5);
$retangulo->calcularArea(); 


?>