<?php
require_once("conecta.php"); 

function insereProduto($conexao, $nome, $preco, $descricao, $categoriaId, $usado) {
	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoriaId}, {$usado})";
	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoriaId, $usado) {
	$query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoriaId}, usado = {$usado} WHERE id = {$id}";
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