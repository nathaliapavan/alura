<?php

interface iResposta {
	public function responde(Requisicao $requisicao, Conta $conta);
	public function setProxima(iResposta $proxima);
}


?>