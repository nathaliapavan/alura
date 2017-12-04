<?php

function autoload($classe) {
	require_once($classe.".php");
}

spl_autoload_register("autoload");

$reforma = new Orcamento(5);
$icsm    = new Icms();
$iss     = new Iss();
$iccc    = new Iccc();

$calculaImposto = new CalculaImposto();

echo $calculaImposto->realizaCalculo($reforma, $icsm);
echo "<br>";
echo $calculaImposto->realizaCalculo($reforma, $iss);
echo "<br>";
echo $calculaImposto->realizaCalculo($reforma, $iccc);

// descontos
echo '<br><br>';
echo 'Testes de descontos<br>';

$calculaDesconto = new CalculaDesconto();

$reforma->addItem(new Item('Lapis', 2));
$reforma->addItem(new Item('Caneta', 2));

echo $calculaDesconto->desconto($reforma);


?>