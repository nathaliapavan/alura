<?php 
include("cabecalho.php");
include("conecta.php"); 
include("banco-produto.php"); 

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoriaId = $_POST["categoria_id"];

if(insereProduto($conexao, $nome, $preco, $descricao, $categoriaId)) { ?>
	<p class="text-success">
    	Produto <?= $nome; ?> adicionado com sucesso!
	</p>
<?php }else { 
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">
    	Produto <?= $nome; ?>, não foi adicionado: <?= $msg; ?>
	</p>
<?php	

}

mysqli_close($conexao); // não é obrigatório. o PHP reconhece o fim do script
?>


<?php include("rodape.php"); ?>
