<?php

class RespostaXml implements iResposta {

	private $outraResposta;

	public function responde(Requisicao $requisicao, Conta $conta) {
		if ($requisicao->getFormato() == Formato::$XML) {
			echo "<conta><titular>" . $conta->getTitular() . "</titular><saldo>" . $conta->getSaldo() . "</saldo></conta>";
		}else {
			$outraResposta->responde($requisicao, $conta);
		}
	}

	public function setProxima(iResposta $resposta) {
		$this->outraResposta = $resposta;
	}
}

?>