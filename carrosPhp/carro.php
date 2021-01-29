<?php


class Carro
{

    public string $nome;
    public string $marca;

    public function __construct(string $setNome , string $setMarca)
    {
       $this->nome = $setNome;
       $this->marca = $setMarca;
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function getMarca()
    {
        return $this->marca;
    }   
    public function exibeMensagem()
    {
        echo   $this->nome . '  ' . $this->marca . ' '  . '<br>';
    }
}

$carro1 = new Carro(' RENEGADE', 'JEEP' );
$carro1->exibeMensagem();

$carro2 = new Carro('CRV', 'HONDA');
$carro2->exibeMensagem();

$carro3 = new Carro(' X5', 'BMW');
$carro3->exibeMensagem();

$carro4 = new Carro(' UNO', 'FIAT');
$carro4->exibeMensagem();

$carro5 = new Carro(' FIESTA', 'FORD');
$carro5->exibeMensagem();

$carro6 = new Carro(' FUSION','FORD');
$carro6->exibeMensagem();

$carro7 = new Carro(' VECTRA', 'CHEVROLET');
$carro7->exibeMensagem();

$carro8 = new Carro(' A6','AUDI');
$carro8->exibeMensagem();

$carro9  = new Carro(' LINEA', 'FIAT');
$carro9->exibeMensagem();

$carro10 = new Carro(' 207', 'JEEP');
$carro10->exibeMensagem();
