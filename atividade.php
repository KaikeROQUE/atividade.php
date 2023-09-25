<?php

class Estoque {
    private $itens = [];

    public function adicionarItem($nome, $quantidade) {
        $this->itens[$nome] = $quantidade;
    }

    public function visualizarEstoque() {
        echo "Estado atual do estoque:\n";
        foreach ($this->itens as $nome => $quantidade) {
            echo "$nome: $quantidade\n";
        }
    }

    public function removerItem($nome) {
        if (isset($this->itens[$nome])) {
            unset($this->itens[$nome]);
            echo "$nome removido do estoque.\n";
        } else {
            echo "$nome não encontrado no estoque.\n";
        }
    }
}

$estoque = new Estoque();

$estoque->adicionarItem("Item 1", 10);
$estoque->adicionarItem("Item 2", 5);
$estoque->adicionarItem("Item 3", 20);
$estoque->adicionarItem("Item 4", 15);
$estoque->adicionarItem("Item 5", 8);


$estoque->visualizarEstoque();


$itemRemover = "Item 3";
$estoque->removerItem($itemRemover);


$estoque->visualizarEstoque();
?>