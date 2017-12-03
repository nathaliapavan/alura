<?php
	
class ProdutoDao {

	private $conexao;

	function __construct($conexao) {
		$this->conexao = $conexao;
	}
	
	function insereProduto(Produto $produto) {

	    $isbn = "";
	    if ($produto->temIsbn()) {
	        $isbn = $produto->getIsbn();
	    }

	    $tipoProduto = get_class($produto);

	    $query = "insert into produtos (nome, preco, descricao, categoria_id, 
	        usado, isbn, tipo_produto) values ('{$produto->getNome()}', 
	            {$produto->getPreco()}, '{$produto->getDescricao()}', 
	                {$produto->getCategoria()->getId()}, {$produto->getUsado()},
	                    '{$isbn}', '{$tipoProduto}')";
	    return mysqli_query($this->conexao, $query);
	}

	function alteraProduto(Produto $produto) {

	    $isbn = "";
	    if ($produto->temIsbn()) {
	        $isbn = $produto->getIsbn();
	    }

	    $tipoProduto = get_class($produto);

	    $query = "update produtos set nome = '{$produto->getNome()}', 
	        preco = {$produto->getPreco()}, descricao = '{$produto->getDescricao()}', 
	            categoria_id= {$produto->getCategoria()->getId()}, 
	                usado = {$produto->getUsado()}, isbn = '{$isbn}', 
	                    tipo_produto = '{$tipoProduto}' 
	                        where id = '{$produto->getId()}'";
	    var_dump($query);
	    return mysqli_query($this->conexao, $query);
	}

	function listaProduto() {

	    $produtos = array();
	    $resultado = mysqli_query($this->conexao, "select p.*,c.nome as categoria_nome 
	        from produtos as p join categorias as c on c.id=p.categoria_id");

	    while($produto_array = mysqli_fetch_assoc($resultado)) {

	        $categoria = new Categoria();
	        $categoria->setNome($produto_array['categoria_nome']);

	        $produto_id = $produto_array['id'];
	        $nome = $produto_array['nome'];
	        $descricao = $produto_array['descricao'];
	        $preco = $produto_array['preco'];
	        $usado = $produto_array['usado'];
	        $isbn = $produto_array['isbn'];
	        $tipoProduto = $produto_array['tipo_produto'];

	        if ($tipoProduto == "Livro") {
	            $produto = new Livro($nome, $preco, $descricao, $categoria, $usado);
	            $produto->setIsbn($isbn);
	        } else {
	            $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
	        }

	        $produto->setId($produto_id);

	        array_push($produtos, $produto);
	    }

	    return $produtos;
	}

	function buscaProduto($id) {
	    $query = "select * from produtos where id = {$id}";
	    $resultado = mysqli_query($this->conexao, $query);
	    $produto_buscado = mysqli_fetch_assoc($resultado);

	    $categoria = new Categoria();
	    $categoria->setId($produto_buscado['categoria_id']);

	    $nome = $produto_buscado['nome'];
	    $descricao = $produto_buscado['descricao'];
	    $preco = $produto_buscado['preco'];
	    $usado = $produto_buscado['usado'];
	    $isbn = $produto_buscado['isbn'];
	    $tipoProduto = $produto_buscado['tipo_produto'];

	    if ($tipoProduto == "Livro") {
	        $produto = new Livro($nome, $preco, $descricao, $categoria, $usado);
	        $produto->setIsbn($isbn);
	    } else {
	        $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
	    }

	    $produto->setId($produto_buscado['id']);

	    return $produto;
	}

	function removeProduto($id) {
		$query = "DELETE FROM produtos WHERE id = {$id}";
		return mysqli_query($this->conexao, $query);
	}
}
?>