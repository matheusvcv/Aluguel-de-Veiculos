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
 		<?php echo "Seja bem vindo, colaborador " . strtoupper($_SESSION['nome']) . " o que deseja fazer?"; ?><br>
 		
 		<br><div id="item">
	 		<p>
	 		<label><a href="admin/cadastro.php" style="color: white;">Cadastrar um novo Cliente:</a></label>
	 		</p><
 		</div><br>
 		<div id="item">
	 		<p>
	 			<label><a href="admin/consulta.php" style="color: white;">Consultar o banco de clientes</a></label>
	 		</p>
	 	</div><br>
	 	<div id="item">
	 		<p>
	 			<label><a href="admin/alugar.php" style="color: white;">Realizar uma Locação</a></label>
	 		</p>
 		</div><br>
 		<div id="item">
	 		<p>
	 			<label><a href="admin/devolucao.php" style="color: white;">Receber devolução locação.</a></label>
	 		</p>
 		</div>
 	</div>
</body>
</html>

