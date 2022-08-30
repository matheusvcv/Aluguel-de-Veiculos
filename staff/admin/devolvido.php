<?php
	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>Cadastro do Cliente</title>
	</head>
	<body>
<body>
	<div id="faixa">
		<h1>Veículo Devolvido Com Sucesso.</h1>
	</div>
	<div id="container">
		<p>Confirmado em sistema que o cliente <strong><?php echo $_SESSION['cliente']; ?></strong> efetuou a devolução do veículo para o colaborador <strong><?php echo $_SESSION['nome'] ?></strong>.</p>
		<p><a href="../painel.php"><button>Voltar</button></a></p>
	</div>
</body>
</html>
