<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" /><br/></td>
		</tr>
	    <tr>
	    	<td>Preço</td> 
	    	<td><input class="form-control" type="decimal" name="preco" value="<?=$produto['preco']?>" /><br/></td>
	    </tr>
	     <tr>
	    	<td>Descrição</td> 
	    	<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
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
		    			$essaECategoria = $produto['categoria_id'] == $categoria['id'];
		    			$selecao = $essaECategoria ? "selected='selected'" : "";
		    			?>
		    			<option value="<?=$categoria['id']?>" <?=$selecao?>>
		    			<?=$categoria['nome']?>
		    			</option>
		    		<?php endforeach ?>
	    		</select>
	    	</td>
	    </tr>