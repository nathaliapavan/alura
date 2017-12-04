<?php

class Icms implements iImposto{

	public function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.05;
	}
}
?>