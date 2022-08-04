<?php

	$conexao = new mysqli("localhost", "root", "", "sistema-estacionamento");

	$conexao-> set_charset('utf8');

	if($conexao ->error){
		die("Falha na conexao.");
	}
