<?php

function autoload($classe) {
	require_once($classe.".php");
}

spl_autoload_register("autoload");

$reforma = new Orcamento(4000);
$icsm    = new Icms();
$iss     = new Iss();
$iccc    = new Iccc();

$calculaImposto = new CalculaImposto();

echo $calculaImposto->realizaCalculo($reforma, $icsm);
echo "<br>";
echo $calculaImposto->realizaCalculo($reforma, $iss);
echo "<br>";
echo $calculaImposto->realizaCalculo($reforma, $iccc);


?>