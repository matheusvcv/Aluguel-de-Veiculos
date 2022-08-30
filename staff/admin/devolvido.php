<?php

require "../protect.php";
require "../conexao.php";
require "../src/cliente.php";

$reservas = New Cliente($conexao);
$reserva = $reservas-> exibeReservaIndividual($_SESSION['id_carro']);

$cliente = $reserva['cliente'];
$nome_carro = $reserva['nome_carro'];
$id_carro = $reserva['id'];


	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$devolucao_veiculo = New Cliente($conexao);
		$devolucao = $devolucao_veiculo-> deletaReserva($id_carro);

		$_SESSION['id_carro'] = $_POST['reserva'];

		header("Location: devolvido.php");
	}

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
		<p>Confirmar que o cliente  <strong><?php echo $cliente; ?></strong> efetuou a devolução do veículo <strong><?php echo $nome_carro; ?></strong> para o colaborador <strong><?php echo $_SESSION['nome'] ?></strong>.</p>

		<form method="POST" action="">
			<input type="submit" value="Confirmar">
		</form>

		<div id="logo">
			<a href="../painel.php"><button>Voltar</button></a>
		</div>
	</div>
</body>
</html>
