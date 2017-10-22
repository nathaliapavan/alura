<?php

function insereProduto($conexao, $nome, $preco, $descricao, $categoriaId) {
	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoriaId})";
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

function removeProduto($conexao, $id) {
	$query = "DELETE FROM produtos WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}