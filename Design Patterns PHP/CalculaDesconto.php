<?php

class CalculaDesconto {

	public function desconto(Orcamento $orcamento) {

		$descontoItem = new DescontoItem();
		$descontoValor = new DescontoValor();
		$descontoVendaCasada = new DescontoVendaCasada();
		$semDesconto = new SemDesconto();

		$descontoItem->setProximo($descontoValor);
		$descontoValor->setProximo($descontoVendaCasada);
		$descontoVendaCasada->setProximo($semDesconto);

		$valorDesconto = $descontoItem->desconto($orcamento);
		return $valorDesconto;

	}
}

?>