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
	<title></title>
</head>
<body>
	<form action="alugar4.php" method="POST">
		<h1>Agora escolha o tempo de locação desejado:</h1>
			<select name="periodo">
				<option value="Não Definiu">Escolha uma opção:</option>
				<option value="um_dia">01 Dia</option>
				<option value="tres_dias">03 Dias</option>
				<option value="uma_semana">01 Semana</option>
				<option value="duas_semanas">02 Semanas</option>
				<option value="um_mes">01 mês</option>
			</select><br>
		
		<br><input type="submit" value="Continuar">	
	</form>
</body>
</html>