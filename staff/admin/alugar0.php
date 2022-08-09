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
	<title></title>
</head>
<body>
		<form action="alugar1.php" method="POST">	
			<p>Por questão de segurança, confirme o CPF do cliente cadastrado:</p>
			<p>
				<input type="text" name="cpf" placeholder="Digite aqui o CPF do cliente">
			</p>
			<input type="submit" value="Continuar">
		</form>

		
</body>
</html>