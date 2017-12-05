<?php

class Ikcv extends TemplateImposto {

	function __construct(Imposto $outroImposto = null) {
		parent::__construct($outroImposto);
	}

    protected function usarMaximo(Orcamento $orcamento) {
    	return $orcamento->getValor() > 500;
    }

	protected function maximaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.10 + $this->calculaOutroImposto($orcamento);
	}

	protected function minimaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.06 + $this->calculaOutroImposto($orcamento);
	}
}

?>