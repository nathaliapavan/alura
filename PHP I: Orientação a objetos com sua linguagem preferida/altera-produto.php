<?php 
require_once("cabecalho.php");
require_once("banco-produto.php"); 
require_once("class/Produto.php"); 
require_once("class/Categoria.php");

$produto = new Produto();
$categoria = new Categoria();
$categoria->id = $_POST["categoria_id"];

$produto->id = $_POST['id'];
$produto->nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria = $categoria;

if (array_key_exists('usado', $_POST)) {
	$produto->usado = "true";
}else {
	$produto->usado = "false";
}

if(alteraProduto($conexao, $produto)) { ?>
	<p class="text-success">
    	Produto <?= $produto->nome; ?> alterado com sucesso!
	</p>
<?php }else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">
    	Produto <?= $produto->nome; ?>, não foi alterado: <?= $msg; ?>
	</p>
<?php	

}

mysqli_close($conexao); // não é obrigatório. o PHP reconhece o fim do script
?>


<?php include("rodape.php"); ?>
