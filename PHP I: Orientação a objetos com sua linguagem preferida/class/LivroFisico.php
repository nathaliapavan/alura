<?php

class LivroFisico extends Livro {

	private $taxa_impressao;

	public function setTaxaImpressao($taxa_impressao){
		$this->taxa_impressao = $taxa_impressao;
	}

	public function getTaxaImpressao() {
		return $this->taxa_impressao;
	}

	public function atualizaBaseadoEm($params) {
		$this->setIsbn($params['isbn']);
		$this->setTaxaImpressao($params['taxa_impressao']);
	}

}
?>