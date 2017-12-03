<?php 
require_once("cabecalho.php"); 
?>

<table class="table table-striped table-bordered">
	<?php
		$produtoDao = new ProdutoDao($conexao);
		$produtos = $produtoDao->listaProduto();

		foreach ($produtos as $produto):
	?>
	<tr>
		<td><?= $produto->getNome() ?></td>
		<td><?= $produto->getPreco() ?></td>
		<td><?= $produto->precoComDesconto() ?></td>
		<td><?= substr($produto->getDescricao(), 0, 40) ?></td>
		<td><?= $produto->getCategoria()->getNome() ?></td>
		<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto->getId()?>">Alterar</a></td>
		<td>
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$produto->getId()?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>
	<?php
		endforeach
	?>
</table>

<?php include("rodape.php"); ?>