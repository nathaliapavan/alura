<?php 
require_once("cabecalho.php");

$produtoDao = new ProdutoDao($conexao);

$categoria = new Categoria();
$categoria->setId($_POST["categoria_id"]);

$nome        = $_POST["nome"];
$preco       = $_POST["preco"];
$descricao   = $_POST["descricao"];
$tipoProduto = $_POST['tipoProduto'];
$isbn        = $_POST['isbn'];

if (array_key_exists('usado', $_POST)) {
	$usado = "true";
}else {
	$usado = "false";
}

if ($tipoProduto == "Livro") {
    $produto = new Livro($nome, $preco, $descricao, $categoria, $usado);
    $produto->setIsbn($isbn);
} else {
    $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
}

$produto->setId($_POST['id']);

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
