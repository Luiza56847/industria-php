<?php

class Produto
{
    private string $codigo;
    private string $nome;
    private float $preco;
    private int $estoque; 
    public function __construct(string $codigo, string $nome, float $preco, int $estoque)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function getCodigo(): string
    {
        return $this->codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getEstoque(): int
    {
        return $this->estoque;
    }

    public function setEstoque(int $estoque): void
    {
        $this->estoque = $estoque;
    }

    // novo método
    public function atualizarEstoque(int $quantidade): void
    {
        $this->estoque += $quantidade;
    }

    public function exibirDados(): void
    {
        echo "Código: $this->codigo<br>";
        echo "Nome: $this->nome<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Estoque: $this->estoque<br>";
    }
}

?>