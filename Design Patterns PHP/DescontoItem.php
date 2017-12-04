<?php

class DescontoItem implements iDesconto {

	private $proximoDesconto;
	
	public function desconto(Orcamento $orcamento) {

		if (count($orcamento->getItens()) >= 5) {
			return $orcamento->getValor() * 0.1;
		}else {
			return $this->proximoDesconto->desconto($orcamento); 							
		}
	}

	public function setProximo(iDesconto $proximo) {

		$this->proximoDesconto = $proximo;
	}
}

?>