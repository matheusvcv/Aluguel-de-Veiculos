<?php

	require "protect.php";

	/*if(!isset($_SESSION)){
		session_start();
	}*/


 		echo "Peidou na sala!";

 		echo $_SESSION['nome'];


 ?>

 <a href="logout.php">Sair</a>