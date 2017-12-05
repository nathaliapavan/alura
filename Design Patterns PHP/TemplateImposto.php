<?php

abstract class TemplateImposto implements iImposto {

	public final function calcula(Orcamento $orcamento) {
		if ($this->usarMaximo($orcamento)) {
			return $this->maximaTaxacao($orcamento);
		}else {
			return $this->minimaTaxacao($orcamento);
		}
	}

	protected abstract function usarMaximo(Orcamento $orcamento);

	protected abstract function maximaTaxacao(Orcamento $orcamento);

	protected abstract function minimaTaxacao(Orcamento $orcamento);
}

?>