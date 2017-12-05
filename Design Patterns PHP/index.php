<?php

function autoload($classe) {
	require_once($classe.".php");
}

spl_autoload_register("autoload");

$reforma = new Orcamento(5000);
$icsm    = new Icms(new Iss());
$iss     = new Iss();
$iccc    = new Iccc();
$ikcv    = new Ikcv();

$calculaImposto = new CalculaImposto();
echo "ICMS - ";
echo $calculaImposto->realizaCalculo($reforma, $icsm);
echo "<br>ISS - ";
echo $calculaImposto->realizaCalculo($reforma, $iss);
echo "<br>ICCC - ";
echo $calculaImposto->realizaCalculo($reforma, $iccc);
echo "<br>IKCV - ";
echo $calculaImposto->realizaCalculo($reforma, $ikcv);

// descontos
echo '<br><br>';
echo 'Testes de descontos<br>';

$calculaDesconto = new CalculaDesconto();

$reforma->addItem(new Item('Lapis', 2));
$reforma->addItem(new Item('Caneta', 2));

echo $calculaDesconto->desconto($reforma);

echo '<br><br>';

// Decorator
echo 'ImpostoAlto + ICMS - ';
echo $calculaImposto->realizaCalculo($reforma, new ImpostoAlto(new Icms()));

?>