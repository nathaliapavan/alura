<?php

class Ebook extends Livro {

	private $water_mark;

	public function setWaterMark($water_mark){
		$this->water_mark = $water_mark;
	}

	public function getWaterMark() {
		return $this->water_mark;
	}

	public function atualizaBaseadoEm($params) {
		$this->setIsbn($params['isbn']);
		$this->setWaterMark($params['water_mark']);
	}
}
?>