<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['cliente'] = $_POST['cliente'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aluguel de Veículo</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
		<form action="alugar1.php" method="POST">
			<div id="faixa">
				<p>Por questão de segurança, confirme o CPF do cliente cadastrado:</p>
			</div>
				<div id="container">
				<p>
					<input type="text" name="cpf" placeholder="Digite aqui o CPF do cliente">
				</p>
				<input type="submit" value="Continuar">
			</div>
		</form>

		
</body>
</html>