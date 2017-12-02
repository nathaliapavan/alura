<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto->getNome()?>" /><br/></td>
		</tr>
	    <tr>
	    	<td>Preço</td> 
	    	<td><input class="form-control" type="decimal" name="preco" value="<?=$produto->getPreco()?>" /><br/></td>
	    </tr>
	     <tr>
	    	<td>Descrição</td> 
	    	<td><textarea class="form-control" name="descricao"><?=$produto->getDescricao()?></textarea></td>
	    </tr>
	    <tr>
	    	<td></td>
	    	<td><input type="checkbox" name="usado" <?=$usado?> value="true">Usado</td>
	    </tr>
	    <tr>
	    	<td>Categoria</td> 
	    	<td>
	    		<select name="categoria_id" class="form-control">
		    		<?php foreach($categorias as $categoria): 
		    			$essaECategoria = $produto->getCategoria()->getId() == $categoria->getId();
		    			$selecao = $essaECategoria ? "selected='selected'" : "";
		    			?>
		    			<option value="<?=$categoria->getId()?>" <?=$selecao?>>
		    			<?=$categoria->getNome()?>
		    			</option>
		    		<?php endforeach ?>
	    		</select>
	    	</td>
	    </tr>