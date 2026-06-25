<?php

class Funcionario
{
    private string $nome;
    private string $matricula;

    public function __construct(string $nome, string $matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    public function exibirDados(): void
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
    }
}

?>