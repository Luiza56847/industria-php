<?php

class Produto
{
    private string $codigo;
    private string $nome;
    private float $preco;

    public function __construct(string $codigo, string $nome, float $preco)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getCodigo(): string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): void
    {
        $this->codigo = $codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function exibirDados(): void
    {
        echo "Código: " . $this->codigo . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}

?>