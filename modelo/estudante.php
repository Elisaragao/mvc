<?php
include "conexao_bd.php";

class Estudante
{
    //Atributos
    private $cpf;
    private $nome;
    private $curso;
    private $idade;

    //Método construtor
    public function __contruct($cpf, $nome, $curso, $idade)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->curso = $curso;
        $this->idade = $idade;
    }

    //Métodos da classe
    public function matricular(){
        $sql = "INSERT INTO estudante(cpf, nome, curso, idade) ";
        $sql .= "VALUES('$this->cpf', '$this->nome', '$this->curso', '$this->idade')";

        return executarComando($sql);
    }

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