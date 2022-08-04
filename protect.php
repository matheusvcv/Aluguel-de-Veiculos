<?php
	if(!isset($_SESSION)) {
		session_start();
	}

	if(!isset($_SESSION['id'])){

		die("Voce não pode acessar essa página, pois não está logado. <a href='index.php'>Clique aqui</a> para fazer Login");
	}