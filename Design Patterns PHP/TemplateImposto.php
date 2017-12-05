<?php

abstract class TemplateImposto extends Imposto {

	public final function calcula(Orcamento $orcamento) {
		if ($this->usarMaximo($orcamento)) {
			return $this->maximaTaxacao($orcamento) + $this->calculaOutroImposto($orcamento);
		}else {
			return $this->minimaTaxacao($orcamento) + $this->calculaOutroImposto($orcamento);
		}
	}

	protected abstract function usarMaximo(Orcamento $orcamento);

	protected abstract function maximaTaxacao(Orcamento $orcamento);

	protected abstract function minimaTaxacao(Orcamento $orcamento);
}

?>