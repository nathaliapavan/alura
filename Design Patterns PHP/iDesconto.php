<?php

interface iDesconto {
	public function desconto(Orcamento $orcamento);
	public function setProximo(iDesconto $proximo);
}

?>