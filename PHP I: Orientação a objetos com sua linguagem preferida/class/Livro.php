<?php

class Livro extends Produto {

	private $isbn;

	public function setIsbn($isbn) {
		$this->isbn = $isbn;
	}

	public function getIsbn() {
		return $this->isbn;
	}
}
?>