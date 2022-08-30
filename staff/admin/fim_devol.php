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
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<title>Cadastro do Cliente</title>
</head>
<body>
	<div id="faixa">
		<div id="sair">
 			<a href="../logout.php"><button id="botao">Sair</button></a>
 		</div>
		<h1>Locação Finalizada Com Sucesso</h1>
	</div>
	<div id="container">

		<p>
			Confirmado em sistema que o cliente <strong><?php echo $_SESSION['cliente']; ?></strong>, devolveu o veículo <strong><?php echo $_SESSION['nome_carro']; ?></strong> para o usuário <strong><?php echo $_SESSION['nome']; ?></strong>.
		</p>

			<h2>Dados da Locação</h2>

			<p style="text-align: justify;">
				<strong>Cliente: </strong> <?php echo $_SESSION['cliente']; ?><br>
				<strong>CPF: </strong> <?php echo $_SESSION['cpf']; ?><br>
				<strong>Carro: </strong> <?php echo $_SESSION['nome_carro']; ?><br>
				<strong>Retirada em: </strong> <?php $data = strtotime($_SESSION['horario_retirada']); echo date('d/m/y H:i:s', $data); ?><br>
				<strong>Período: </strong><?php echo $_SESSION['periodo']; ?><br>
				<strong>Usuário Locador: </strong> <?php echo $_SESSION['nome']; ?><br>

			</p>

			<p>
				<strong><h3>Devolvido com sucesso: &#x2705</h3></strong>
			</p>

	<div id="logo">
		<a href="../painel.php"><button>Voltar</button></a>
	</div>
	</div>
</body>
</html>

