<?php

	require "protect.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<title>Aluguel de veículos</title>
</head>
<body>
 <a href="logout.php">Sair</a>
 	<h1>Aluguel de veículos</h1>
 		<?php echo "Seja bem vindo, colaborador " . strtoupper($_SESSION['nome']) . " o que deseja fazer?"; ?>
 		
 		<p>
 		<label><a href="cadastro.php">Cadastrar um novo Cliente:</a></label>
 		</p>
 		<p>
 			<label><a href="">Consultar o banco de clientes</a></label>
 		</p>


</body>
</html>

