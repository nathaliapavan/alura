<?php

$produto = new Produto();
$produto->setPreco(59.9);
//$produto->setNome('teste');

$outroProduto = new Produto();
$outroProduto->setPreco(59.9);

if ($produto == $outroProduto) {
	echo 'Objetos iguais';
}else {
	echo 'Objetos diferentes';
}

/*
 * Para comparar duas instancias, compara-se com ===
 * Quando se deseja comparar os atributos compara-se com ==
 */

?>