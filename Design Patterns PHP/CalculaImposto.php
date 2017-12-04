<?php

class CalculaImposto {

	public function realizaCalculo(Orcamento $orcamento, iImposto $imposto) {
		$valor = $imposto->calcula($orcamento);
		echo $valor;
	}
}

?>