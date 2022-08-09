<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['carro'] = $_POST['carro'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="alugar3.php" method="POST">
		<h1>Agora escolha a data e o horário em que você deseja retirar o veículo na loja:</h1>

		<input type="datetime-local" name="horario_retirada">
		
		<input type="submit" value="Continuar">	
	</form>
</body>
</html>