<?php

class SemDesconto implements iDesconto {

	public function desconto(Orcamento $orcamento) {
		return 0;
	}

	public function setProximo(iDesconto $proximo) {

	}
}

?>