<?php 
require_once("cabecalho.php");

$tipoProduto = $_POST['tipoProduto'];
$produto_id = $_POST['id'];
$categoria_id = $_POST['categoria_id'];

$factory = new ProdutoFactory();
$produto = $factory->criaPor($tipoProduto, $_POST);
$produto->atualizaBaseadoEm($_POST);

$produto->setId($produto_id);
$produto->getCategoria()->setId($categoria_id);

if (array_key_exists('usado', $_POST)) {
	$produto->setUsado("true");
}else {
	$produto->setUsado("false");
}

$produtoDao = new ProdutoDao($conexao);

if($produtoDao->alteraProduto($produto)) { ?>
	<p class="text-success">
    	Produto <?= $produto->getNome(); ?> alterado com sucesso!
	</p>
<?php }else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">
    	Produto <?= $produto->getNome(); ?>, não foi alterado: <?= $msg; ?>
	</p>
<?php	

}

mysqli_close($conexao); // não é obrigatório. o PHP reconhece o fim do script
?>


<?php include("rodape.php"); ?>
