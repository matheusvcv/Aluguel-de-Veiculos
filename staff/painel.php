<?php
	require "protect.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<link rel="shortcut icon" href="../img/icons.png" type="icon/x-image">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Aluguel de veículos</title>
</head>
<body>
 	<br>
 	<div id="faixa">
 		<div id="sair">
 			<a href="logout.php"><button id="botao">Sair</button></a>
 		</div>
 		<h1>Aluguel de veículos</h1>
 	</div>
 	<div id="container">
 		<?php echo "Seja bem vindo, colaborador <strong>" . strtoupper($_SESSION['nome']) . "</strong> o que deseja fazer?"; ?><br>
 		
 		<br>

 		<div id="logo">

	 		<p>

	 			<a href="admin/cadastro.php"><button class="botaoMaior">Cadastrar um novo Cliente</button></a>

	 			<a href="admin/consulta.php"><button class="botaoMaior">Consultar Clientes</button></a>

	 		</p>

	 		<p>
	 			<a href="admin/alugar.php"><button class="botaoMaior">Realizar uma Locação</button></a>

	 			<a href="admin/devolucao.php"><button class="botaoMaior">Devolução locação</button></a>

	 		</p>

 		</div>
</body>
</html>

