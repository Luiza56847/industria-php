<?php

class Funcionario
{
    private string $nome;
    private string $matricula;
    private string $cargo;
    private string $departamento; // novo atributo

    public function __construct(
        string $nome,
        string $matricula,
        string $cargo,
        string $departamento
    ) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cargo = $cargo;
        $this->departamento = $departamento;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getDepartamento(): string
    {
        return $this->departamento;
    }

    public function setDepartamento(string $departamento): void
    {
        $this->departamento = $departamento;
    }

    // novo método
    public function alterarDepartamento(string $novoDepartamento): void
    {
        $this->departamento = $novoDepartamento;
    }

    public function exibirDados(): void
    {
        echo "Nome: $this->nome<br>";
        echo "Matrícula: $this->matricula<br>";
        echo "Cargo: $this->cargo<br>";
        echo "Departamento: $this->departamento<br>";
    }
}

?>