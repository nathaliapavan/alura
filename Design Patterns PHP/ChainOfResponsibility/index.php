<?php

function autoload($classe) {
	require_once($classe.".php");
}

spl_autoload_register("autoload");

$conta = new Conta('Nath', 5000);

$respostaXml = new RespostaXml();
$requisicaoUm = new Requisicao(1);
echo $respostaXml->responde($requisicaoUm, $conta) . "<br>";

$respostaCsv = new RespostaCsv();
$requisicaoDois = new Requisicao(2);
echo $respostaCsv->responde($requisicaoDois, $conta) . "<br>";

$respostaPorcento = new RespostaPorcento();
$requisicaoTres = new Requisicao(3);
echo $respostaPorcento->responde($requisicaoTres, $conta) . "<br>";

?>

