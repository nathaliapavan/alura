<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php"); 
require_once("class/Produto.php");
require_once("class/Categoria.php"); 

verificaUsuario();

$produto = new Produto();
$categoria = new Categoria();
$categoria->setId($_POST["categoria_id"]);

$produto->setNome($_POST["nome"]);
$produto->setPreco($_POST["preco"]);
$produto->setDescricao($_POST["descricao"]);
$produto->setCategoria($categoria);

if (array_key_exists('usado', $_POST)) {
	$produto->setUsado("true");
}else {
	$produto->setUsado("false");
}

if(insereProduto($conexao, $produto)) { ?>
	<p class="text-success">
    	Produto <?= $produto->getNome(); ?> adicionado com sucesso!
	</p>
<?php }else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">
    	Produto <?= $produto->getNome(); ?>, não foi adicionado: <?= $msg; ?>
	</p>
<?php	

}

mysqli_close($conexao); // não é obrigatório. o PHP reconhece o fim do script
?>


<?php include("rodape.php"); ?>
