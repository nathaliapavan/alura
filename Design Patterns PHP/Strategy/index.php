<?php

function autoload($classe) {
	require_once($classe.".php");
}

spl_autoload_register("autoload");

$conta = new Conta();
$conta->deposita(5000);

$conservador = new Conservador();
$moderado    = new Moderado();
$arrojado    = new Arrojado();
$realizadorInvestimento = new RealizadorInvestimento();

echo "Conservador: ";
echo $realizadorInvestimento->realiza($conta, $conservador);
echo "<br>";
echo "Moderado: ";
echo $realizadorInvestimento->realiza($conta, $moderado);
echo "<br>";
echo "Arrojado: ";
echo $realizadorInvestimento->realiza($conta, $arrojado);

?>