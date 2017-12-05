<?php

class CalculaImposto {

	public function realizaCalculo(Orcamento $orcamento, Imposto $imposto) {
		$valor = $imposto->calcula($orcamento);
		echo $valor;
	}
}

?>