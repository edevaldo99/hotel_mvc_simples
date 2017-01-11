<?php
	/* pega os comandos */
	if(isset($_GET['co'])){
		$comando = $_GET['co'];
	}else{
		$comando = 'off';
	}

	/* faz o require */
	require "Controller.php";

	/* instancia o controller */
	$controlador = new Controller();

	/* Faz a verificacao e decide o que fazer*/
	if($comando == 'index'){
		$controlador->index();
	}else if($comando == 'off'){
		$controlador->index();	
	}else{
		$controlador->erro();
	}
?>
