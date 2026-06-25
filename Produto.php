<?php

class Funcionario
{
    private string $nome;
    private string $matricula;
    private string $cargo;

    // Construtor atualizado
    public function __construct(string $nome, string $matricula, string $cargo)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cargo = $cargo;
    }

    // Getter e Setter do Nome
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    // Getter e Setter da Matrícula
    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    // Getter e Setter do Cargo
    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function exibirDados(): void
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
    }
}

?>