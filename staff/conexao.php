<?php

	$conexao = new mysqli("localhost", "root", "", "aluguel-veiculos");

	$conexao-> set_charset('utf8');

	if($conexao ->error){
		die("Falha na conexao.");
	}
