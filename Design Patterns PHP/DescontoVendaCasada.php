<?php

class DescontoVendaCasada implements iDesconto {

	private $proximoDesconto;

	public function desconto(Orcamento $orcamento) {
		if($this->aconteceuVendaCasadaEm($orcamento)) {
			return $orcamento->getValor() * 0.05;
		} else {
			return $this->proximoDesconto->desconto($orcamento);
		}
	}

	private function aconteceuVendaCasadaEm(Orcamento $orcamento) {
        return $this->existe("Caneta", $orcamento) && $this->existe("Lapis", $orcamento);
    }

	private function existe($nomeDoItem, Orcamento $orcamento) {
		$cont = 1;
        foreach ($orcamento->getItens() as $item) {
            if($item->getNome() == $nomeDoItem) {
            	$cont++;
            }
        }

        if ($cont > 1) {
        	return true;
        }else {
        	return false;
        }
    }

    public function setProximo(iDesconto $proximo) {
		$this->proximoDesconto = $proximo;
	}
}

?>