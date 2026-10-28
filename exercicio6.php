<?php

abstract class Funcionario{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{
    public float $salarioMensal;

    public function __construct($nome, $salarioMensal){
        parent::__construct($nome);
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalario(){
        return $this->salarioMensal;
    }
}

class FuncionarioComissionado extends Funcionario{
    public float $salarioBase;
    public float $totalVendas;

    public function __construct($nome, $salarioBase, $totalVendas){
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->totalVendas = $totalVendas;
    }

    public function calcularSalario(){
        return $this->salarioBase + ($this->totalVendas * 0.1);
    }
}


$func1 = new FuncionarioFixo('Cleber', 2500);
echo $func1->getNome() . "<br>";
echo $func1->calcularSalario() . '<br>';
$func2 = new FuncionarioComissionado('João', 1800, 8000);
echo $func2->getNome() . "<br>";
echo $func2->calcularSalario() . '<br>';



?>