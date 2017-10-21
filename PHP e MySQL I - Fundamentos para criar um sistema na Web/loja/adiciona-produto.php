<?php include("cabecalho.php"); ?>

<?php

function insereProduto($conexao, $nome, $preco) {
	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
	return mysqli_query($conexao, $query);
}

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereProduto($conexao, $nome, $preco)) { ?>
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
