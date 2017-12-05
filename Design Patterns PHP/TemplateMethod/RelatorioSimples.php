<?php

class RelatorioSimples extends Relatorio {

	protected function cabecalho() {
		echo 'Banco Simples<br>';
	}

	protected function rodape() {
		echo '(11) 1234-5678<br>';
	}

	public function corpo($contas) {
		
		foreach ($contas as $conta) {
			echo $conta->getTitular().' - R$: '.$conta->getSaldo().'<br>';
		}
	}
}

?>