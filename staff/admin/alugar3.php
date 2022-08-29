<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['horario_retirada'] = $_POST['horario_retirada'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Locação de Veículo</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
	<form action="alugar4.php" method="POST">
		<div id="faixa">
		<div id="sair">
 			<a href="../logout.php"><button id="botao">Sair</button></a>
 		</div>
			<h1>Tempo de Locação desejado:</h1>
		</div>
		<div id="container">
			<p>Agora escolha o tempo de locação desejado:</p>
			<select name="periodo">
				<option value="Não Definiu">Escolha uma opção:</option>
				<option value="um_dia">01 Dia</option>
				<option value="tres_dias">03 Dias</option>
				<option value="uma_semana">01 Semana</option>
				<option value="duas_semanas">02 Semanas</option>
				<option value="um_mes">01 mês</option>
			</select><br>
		<div id="logo">
			<br><input type="submit" value="Continuar">
		</div>
	</form>
	</div>
	<div id="logo">
		<br><a href="../painel.php"><button>Cancelar</button></a>
	</div>
</body>
</html>