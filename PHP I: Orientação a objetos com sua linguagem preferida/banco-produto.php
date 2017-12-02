<?php
require_once("conecta.php"); 

function insereProduto($conexao, Produto $produto) {
	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$produto->nome}', {$produto->preco}, '{$produto->descricao}', {$produto->categoriaId}, {$produto->usado})";
	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, Produto $produto) {
	$query = "UPDATE produtos SET nome = '{$produto->nome}', preco = {$produto->preco}, descricao = '{$produto->descricao}', categoria_id = {$produto->categoriaId}, usado = {$produto->usado} WHERE id = {$produto->id}";
	return mysqli_query($conexao, $query);
}

function listaProduto($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, 'SELECT p.*, c.nome AS categoria_nome 
											FROM produtos AS p 
											JOIN categorias AS c ON c.id = p.categoria_id');
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}

	return $produtos;
}

function buscaProduto($conexao, $id) {
	$query = "SELECT * FROM produtos WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id) {
	$query = "DELETE FROM produtos WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}