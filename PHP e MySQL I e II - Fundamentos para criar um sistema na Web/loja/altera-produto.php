<?php 
include("cabecalho.php");
include("conecta.php"); 
include("banco-produto.php"); 

$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoriaId = $_POST["categoria_id"];

if (array_key_exists('usado', $_POST)) {
	$usado = "true";
}else {
	$usado = "false";
}

if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoriaId, $usado)) { ?>
	<p class="text-success">
    	Produto <?= $nome; ?> alterado com sucesso!
	</p>
<?php }else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">
    	Produto <?= $nome; ?>, não foi alterado: <?= $msg; ?>
	</p>
<?php	

}

mysqli_close($conexao); // não é obrigatório. o PHP reconhece o fim do script
?>


<?php include("rodape.php"); ?>
