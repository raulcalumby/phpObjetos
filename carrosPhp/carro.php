<?php


class Carro
{

    public string $nome;
    public string $marca;




    public function getNome()
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca(string $marca)
    {
        $this->marca = $marca;
    }



    public function exibeMensagem()
    {
        echo   $this->nome . '  ' . $this->marca . ' '  . '<br>';
    }
}

$carro1 = new Carro();
$carro1->setNome(' RENEGADE');
$carro1->setMarca('JEEP');
$carro1->exibeMensagem();

$carro2 = new Carro();
$carro2->setNome('CRV');
$carro2->setMarca('HONDA');
$carro2->exibeMensagem();

$carro3 = new Carro();
$carro3->setNome(' X5');
$carro3->setMarca('BMW');
$carro3->exibeMensagem();

$carro4 = new Carro();
$carro4->setNome(' UNO');
$carro4->setMarca('FIAT');
$carro4->exibeMensagem();

$carro5 = new Carro();
$carro5->setNome(' FIESTA');
$carro5->setMarca('FORD');
$carro5->exibeMensagem();

$carro6 = new Carro();
$carro6->setNome(' FUSION');
$carro6->setMarca('FORD');
$carro6->exibeMensagem();

$carro7 = new Carro();
$carro7->setNome(' VECTRA');
$carro7->setMarca('CHEVROLET');
$carro7->exibeMensagem();

$carro8 = new Carro();
$carro8->setNome(' A6');
$carro8->setMarca('AUDI');
$carro8->exibeMensagem();

$carro9  = new Carro();
$carro9->setNome(' LINEA');
$carro9->setMarca('FIAT');
$carro9->exibeMensagem();

$carro10 = new Carro();
$carro10->setNome(' 207');
$carro10->setMarca('PEGEOUT');
$carro10->exibeMensagem();
