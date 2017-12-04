<?php

class Orcamento {

	private $valor;
	private $itens;

	function __construct($valor) {
		$this->valor = $valor;
		$this->itens = array();
	}

	public function getValor() {
		return $this->valor;
	}

	public function getItens() {
		return $this->itens;
	}

	public function addItem(Item $item) {
		$this->itens[] = $item;		
	}
}
?>