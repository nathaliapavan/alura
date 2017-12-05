<?php

class RelatorioComplexo extends Relatorio {

	protected function cabecalho() {
		echo 'Banco Complexo<br>';
		echo 'Avenida Paulista, 1234<br>';
        echo '(11) 1234-5678<br>';
	}

	protected function rodape() {
		echo '<br>banco@complexo.com.br<br>';
        echo date('d/m/Y'); 
	}

	protected function corpo($contas) {
		foreach ($contas as $conta) {
			echo $conta->getTitular().' - '. $conta->getConta().' - '.$conta->getAgencia().' - R$: '.$conta->getSaldo();
		}
	}

}

?>