<?php

class Item {

	private $nome;
	private $valor;

	function __construct($nome, $valor) {
		$this->nome = $nome;
		$this->valor = $valor;
	}

	function getNome() {
		return $this->nome;
	}

	function getValor() {
		return $this->valor;
	}
	
}
?>