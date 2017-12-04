<?php

class RespostaPorcento implements iResposta {

	private $outraResposta;

	public function responde(Requisicao $requisicao, Conta $conta) {
		if ($requisicao->getFormato() == Formato::$PORCENTO) {
			echo $conta->getTitular().'%'.$conta->getSaldo();
		}else {
			$outraResposta->responde($requisicao, $conta);
		}
	}

	public function setProxima(iResposta $resposta) {
		$this->outraResposta = $resposta;
	}
}

?>