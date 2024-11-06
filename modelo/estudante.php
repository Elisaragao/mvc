<?php

class Estudante
{
    //Atributos
    private $cpf;
    private $nome;
    private $curso;
    private $idade;

    //Métodos GETs e SETs
    
    public function getCpf()
    {
        return $this->cpf; // 'this' = Desta classe retorna o valor de cpf
    }

     
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    
    public function getNome()
    {
        return $this->nome;
    }

   
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

   
    public function getCurso()
    {
        return $this->curso;
    }

    
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

   
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }
}