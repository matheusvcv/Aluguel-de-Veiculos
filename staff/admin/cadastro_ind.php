<?php
	require "../conexao.php";
	require "../src/cliente.php";
	require "../protect.php";


	$clientes = New Cliente($conexao);
	$cliente = $clientes-> exibeIndividual($_GET['cpf']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cliente Selecionado</title>
	<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
	<div id="faixa">
		<h1>Cliente Selecionado:</h1>
	</div>
	<div id="container">
		<p>
			<strong>CPF do Cliente:</strong> <?php echo $cliente['cpf']; ?> 
		</p>

		<p>
			<strong>Nome do Cliente:</strong> <?php echo $cliente['nome']; ?> 
		</p>

		<p>
			<strong>Data Nascimento:</strong> <?php echo $cliente['nascimento']; ?>
		</p>

		<p>
			<strong>E-mail:</strong> <?php echo $cliente['email']; ?>
		</p>

		<p>
			<strong>Telefone:</strong> <?php echo $cliente['telefone']; ?>
		</p>

		<p>
			<strong>Cidade:</strong> <?php echo $cliente['cidade']; ?>
		</p>
		<p>
			<strong>Bairro:</strong> <?php echo $cliente['bairro']; ?> 
		</p>
		<p>
			<strong>Logradouro:</strong> <?php echo $cliente['logradouro']; ?>
		</p>
		<p>
			<strong>Número></strong> <?php echo $cliente['numero']; ?>
		</p>
		<p>
			<strong>Frequência:</strong> <?php echo $cliente['frequencia']; ?> 
		</p>
			
		<p><a href="../painel.php"><button>Voltar</button></a></p>
	</div>
</body>
</html>