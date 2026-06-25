<?php

class OrdemProducao
{
    private string $numeroOrdem;
    private string $produto;
    private int $quantidade;
    private string $dataEmissao;
    private string $status;

    // Construtor
    public function __construct(
        string $numeroOrdem,
        string $produto,
        int $quantidade,
        string $dataEmissao,
        string $status
    ) {
        $this->numeroOrdem = $numeroOrdem;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->dataEmissao = $dataEmissao;
        $this->status = $status;
    }

    // Getters e Setters
    public function getNumeroOrdem(): string
    {
        return $this->numeroOrdem;
    }

    public function setNumeroOrdem(string $numeroOrdem): void
    {
        $this->numeroOrdem = $numeroOrdem;
    }

    public function getProduto(): string
    {
        return $this->produto;
    }

    public function setProduto(string $produto): void
    {
        $this->produto = $produto;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    public function getDataEmissao(): string
    {
        return $this->dataEmissao;
    }

    public function setDataEmissao(string $dataEmissao): void
    {
        $this->dataEmissao = $dataEmissao;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    // Método para exibir dados da ordem de produção
    public function exibirDados(): void
    {
        echo "Número da Ordem: " . $this->numeroOrdem . "<br>";
        echo "Produto: " . $this->produto . "<br>";
        echo "Quantidade: " . $this->quantidade . "<br>";
        echo "Data de Emissão: " . $this->dataEmissao . "<br>";
        echo "Status: " . $this->status . "<br>";
    }
}

?>