<?php

	require "protect.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Aluguel de veículos</title>
</head>
<body>
 <a href="logout.php">Sair</a>
 	<div id="faixa">
 		<h1>Aluguel de veículos</h1>
 	</div>
 	<div id="container">
 		<?php echo "Seja bem vindo, colaborador " . strtoupper($_SESSION['nome']) . " o que deseja fazer?"; ?>
 		
 		<p>
 		<label><a href="admin/cadastro.php">Cadastrar um novo Cliente:</a></label>
 		</p>
 		<p>
 			<label><a href="admin/consulta.php">Consultar o banco de clientes</a></label>
 		</p>
 		<p>
 			<label><a href="admin/alugar.php">Realizar uma Locação</a></label>
 		</p>
 		<p>
 			<label><a href="admin/devolucao.php">Receber uma devolução de carro locado.</a></label>
 		</p>
 	</div>
</body>
</html>

