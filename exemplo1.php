<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido...";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo "<br>Miau!";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        echo "<br>Auuu!";
    }
}

$gato = new Gato();
$gato->emitirSom();

$dog = new Cachorro();
$dog->emitirSom();

?>