<?php

class Produto {

	private $id;
	private $nome;
	private $preco;
	private $descricao;
	private $categoria;
	private $usado;

	function __construct($nome, $preco, $descricao, Categoria $categoria, $usado) {
		$this->nome      = $nome;
		$this->preco     = $preco;
		$this->descricao = $descricao;
		$this->categoria = $categoria;
		$this->usado     = $usado;
	}

	public function setId($id) {
		$this->id = $id; 
	}
	
	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getCategoria() {
		return $this->categoria;
	}

	public function setUsado($usado) {
		$this->usado = $usado;
	}

	public function getUsado() {
		return $this->usado;
	}

	public function precoComDesconto($desconto = 0.1) {
		if ($desconto > 0 && $desconto <= 0.5) {
			$this->preco -= $this->preco * $desconto;	
		}

		return $this->preco;
	}

	public function temIsbn() {
		return $this instanceof Livro;
	} 

	public function temTaxaImpressao() {
		return $this instanceof LivroFisico;
	}

	public function temWaterMark() {
		return $this instanceof Ebook;
	}

	public function calculaImposto() {
		return $this->preco * 0.195;
	}

	public function atualizaBaseadoEm($params) {
		if ($this->temIsbn()) {
			$this->setIsbn($params['isbn']);
		}

		if ($this->temTaxaImpressao()) {
			$this->setTaxaImpressao($params['taxa_impressao']);
		}

		if ($this->temWaterMark()) {
			$this->setWaterMark($params['water_mark']);
		}
	}

	function __toString() {
		return $this->nome . ": R$ " . $this->preco;
	}

	/*
	function __destruct() {
		echo 'Produto destruido';
	}
	*/
}


?>