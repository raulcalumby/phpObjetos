<?php

class Conta {
private string $cpfTitular;
private string  $nomeTitular;
private float $saldo ;



public function __construct(string $nomeTitular, string $cpfTitular)
{
    $this->nomeTitular = $nomeTitular;
    $this->cpfTitular = $cpfTitular;
    $this->saldo = 0 ;
}

 public function sacar(float $valorASacar) : void
   {
       if($valorASacar > $this-> saldo){
           echo "saldo indisponivel <br>" ;
           return;

       }
           $this -> saldo -= $valorASacar;
       



   }
public  function depositar(float $valorADepositar): void
{
       if($valorADepositar < 0){
           echo " valor invalido";
           return;
       }
       $this -> saldo += $valorADepositar;
       

}
public function transferir  (float $valoraATransferir, Conta $contaDestino): void 
{
            if($valoraATransferir > $this ->saldo ){
                echo "valor invalido";
                return;
            
            }
                $this -> sacar($valoraATransferir);
                $contaDestino -> depositar($valoraATransferir);
            
}

public function mostrarCpf():string
{
    return $this->cpfTitular;
}

public function mostrarSaldo():float
{
    return $this->saldo;
}


public function mostraTitular(): string
{
    return $this->nomeTitular;
}

public function mostraConta() 
{
    echo " $this->cpfTitular  <br>";
    echo " $this->saldo       <br>";
    echo " $this->nomeTitular <br>";
   
}


}




?>