<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['carro'] = $_POST['carro'];

	$carros = New Cliente($conexao);
	$carro = $carros-> exibeCarroIndividual($_SESSION['carro']);

	$_SESSION['nome_carro'] = $carro['nome'];;
	$_SESSION['grupo'] = $carro['grupo'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aluguel Veículo</title>
	<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
	<form action="alugar3.php" method="POST">
		<div id="faixa">
		<div id="sair">

 		<a href="../logout.php"><button id="botao">Sair</button></a>

 		</div>
			<h1>Data de Retirada:</h1>
		</div>
		<div id="container">
			<p>Agora escolha a data e o horário em que você deseja retirar o veículo na loja:</p>
			<p><input type="datetime-local" name="horario_retirada"></p>
		<div id="logo">
			<input type="submit" value="Continuar">	
		</div>
	</form>
		</div><br>

	<div id="logo">
		<br><a href="../painel.php"><button>Cancelar</button></a>
	</div>
</body>
</html>