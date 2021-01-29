<?php

class Titular
{

    private string $cpf;
    private string  $nome;

    public function __construct(string $nome)
    {
        
        $this->nome = $nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf;
        
    }
    public function recuperaNome(): string
    {
        return $this->nomeTitular;
        
    }
    
}
$primariaConta = new Titular('raul');
echo  "$primariaConta->recuperaNome";