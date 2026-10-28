<?php

abstract class Eletrodomestico{
    protected string $marca;

    public function __construct($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    abstract public function ligar();   
}

class Televisao extends Eletrodomestico{
    public function __construct($marca){
        parent::__construct($marca);
    }
    public function ligar(){
        echo 'Ligando Tela <br>';
    }
}

class Geladeira extends Eletrodomestico{
    public function __construct($marca){
        parent::__construct($marca);
    }
    public function ligar(){
        echo 'Ligando sistema de refrigeração <br>';
    }
}

$geladeira = new Geladeira('Consul');
echo $geladeira->getMarca() . '<br>';
$geladeira->ligar();
echo '<br>';

$televisao = new Televisao('Philco');
echo $televisao->getMarca() . '<br>';
$televisao->ligar();
echo '<br>';



?>