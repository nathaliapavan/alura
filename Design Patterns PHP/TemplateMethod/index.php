<?php

function autoload($classe) {
	require_once($classe.".php");
}

spl_autoload_register("autoload");

$contaOne = new Conta('Nath', 5000, '', '');
$contasSimples = array($contaOne);
$simples = new RelatorioSimples();
$simples->imprime($contasSimples);

echo '<br>';

$contaTwo = new Conta('Nath', 4000, 'XXXXX-X', 'Banco Complexo');
$contasComplexas = array($contaTwo);
$complexo = new RelatorioComplexo($contaTwo);
$complexo->imprime($contasComplexas);

?>