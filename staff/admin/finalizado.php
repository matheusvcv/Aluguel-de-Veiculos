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
		<div id="sair">
 			<a href="../logout.php"><button id="botao">Sair</button></a>
 		</div>
		<h1>Locação realizada com sucesso.</h1>
	</div>
	<div id="container">
		<p>Confirmado em sistema que o usuario <?php echo $_SESSION['nome'] ?> efetuou a locação do veículo selecionado para o cliente  <?php echo $_SESSION['cliente']; ?>, pelo período de  <?php echo $_SESSION['periodo'] ?>.</p>
		<p><a href="../painel.php"><button>Voltar</button></a></p>
	</div>
</body>
</html>


