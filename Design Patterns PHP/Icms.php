<?php

class Icms extends TemplateImposto {

	protected function usarMaximo(Orcamento $orcamento) {
		return $orcamento->getValor() > 500;
	}

	protected function maximaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.15;
	}

	protected function minimaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.05;
	}
}
?>