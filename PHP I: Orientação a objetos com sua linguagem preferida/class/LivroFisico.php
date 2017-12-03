<?php

class LivroFisico extends Livro {

	private $taxa_impressao;

	public function setTaxaImpressao($taxa_impressao){
		$this->taxa_impressao = $taxa_impressao;
	}

	public function getTaxaImpressao() {
		return $this->taxa_impressao;
	}

}
?>