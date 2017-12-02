<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php"); 
require_once("class/Produto.php"); 

verificaUsuario();

$produto = new Produto();

$produto->nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoriaId = $_POST["categoria_id"];

if (array_key_exists('usado', $_POST)) {
	$produto->usado = "true";
}else {
	$produto->usado = "false";
}

if(insereProduto($conexao, $produto)) { ?>
	<p class="text-success">
    	Produto <?= $produto->nome; ?> adicionado com sucesso!
	</p>
<?php }else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">
    	Produto <?= $produto->nome; ?>, não foi adicionado: <?= $msg; ?>
	</p>
<?php	

}

mysqli_close($conexao); // não é obrigatório. o PHP reconhece o fim do script
?>


<?php include("rodape.php"); ?>
