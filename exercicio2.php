<?php

class Frete{

    protected int $pesoMercadoria;

    public function __construct($pesoMercadoria){
        $this->pesoMercadoria = $pesoMercadoria;
    }

    public function calcularFrete(){
        echo "Calculando frete...";
    }
}

class FreteNormal extends Frete{

    public function __construct($pesoMercadoria){
        parent::__construct($pesoMercadoria);
    }
    public function calcularFrete(){
        echo "O preço é: R$" . 10 + (2 * $this->pesoMercadoria);
    }
}

class FreteExpresso extends Frete{

    public function __construct($pesoMercadoria){
        parent::__construct($pesoMercadoria);
    }
    public function calcularFrete(){
        echo "O preço é: R$" . 20 + (5 * $this->pesoMercadoria);
    }
}

class RetiradaLoja extends Frete{
    public function __construct($pesoMercadoria){
        parent::__construct($pesoMercadoria);
    }
    public function calcularFrete(){
        echo 'Frete Grátis';
    }
}

$venda1 = new FreteNormal(50);
$venda1->calcularFrete();
echo '<br>';
$venda2 = new FreteExpresso(50);
$venda2->calcularFrete();




?>