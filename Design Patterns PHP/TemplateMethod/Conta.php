<?php

class Conta {

	private $titular;
	private $saldo;
	private $agencia;
	private $conta;

	function __construct($titular, $saldo, $agencia, $conta) {
		$this->titular = $titular;
		$this->saldo   = $saldo;
		$this->agencia = $agencia;
		$this->conta   = $conta;
	}

	public function getTitular() {
		return $this->titular;
	}

	public function getSaldo() {
		return $this->saldo;
	}

	public function getAgencia() {
		return $this->agencia;
	}

	public function getConta() {
		return $this->conta;
	}
}

?>