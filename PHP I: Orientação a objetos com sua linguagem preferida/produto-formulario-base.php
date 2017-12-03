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
	    <tr>
		    <td>Tipo do produto</td>
		    <td>
		        <select name="tipoProduto" class="form-control">
		            <?php
		            $tipos = array("Produto", "Livro Fisico", "Ebook");
		            foreach($tipos as $tipo) : 
		            	$tipoSemEspaco = str_replace(' ', '', $tipo);
		                $esseEhOTipo = get_class($produto) == $tipoSemEspaco;
		                $selecaoTipo = $esseEhOTipo ? "selected='selected'" : "";
		            ?>
		            <?php if ($tipo == 'Livro Fisico'): ?>
		            		<optgroup label="Livros">
		            <?php endif; ?>
			                <option value="<?=$tipo?>" <?=$selecaoTipo?>>
			                    <?=$tipo?>
			                </option>
		            <?php if ($tipo == 'Ebook'): ?>
		            		</optgroup>
		            <?php endif; ?>
		            <?php
		            endforeach 
		            ?>
		        </select>
		    </td>
		</tr>
		<tr>
		    <td>ISBN</td>
		    <td>
		        <input type="text" name="isbn" class="form-control" 
		            value="<?php if ($produto->temIsbn()) { echo $produto->getIsbn(); } ?>" >
		    </td>
		</tr>
		<tr>
		    <td>Taxa de Impressão - Livro Físico</td>
		    <td>
		        <input type="text" name="taxa_impressao" class="form-control" 
		            value="<?php if ($produto->temTaxaImpressao()) { echo $produto->getTaxaImpressao(); } ?>" >
		    </td>
		</tr>
		<tr>
		    <td>Marca d'água - Ebook</td>
		    <td>
		        <input type="text" name="water_mark" class="form-control" 
		            value="<?php if ($produto->temWaterMark()) { echo $produto->getWaterMark(); } ?>" >
		    </td>
		</tr>