<?php

require "../protect.php";
require "../conexao.php";
require "../src/cliente.php";

$reservas = New Cliente($conexao);
$reserva = $reservas-> exibeReservaIndividual($_SESSION['id_carro']);

$cliente = $reserva['cliente'];
$nome_carro = $reserva['nome_carro'];
$id_carro = $reserva['id'];

//die(var_dump($_SESSION['id_carro']));

if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$deletar = New Cliente($conexao);
	$delete = $deletar-> deletaReserva($_SESSION['id_carro']);

	header('Location: fim_devol.php');
}


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>Cadastro do Cliente</title>
	</head>
	<body>
<body>
	<div id="faixa">
		<h1>Confirmar devolução</h1>
	</div>
	<div id="container">
		<p>Confirmar que o cliente  <strong><?php echo $cliente; ?></strong> efetuou a devolução do veículo <strong><?php echo $nome_carro; ?></strong> para o colaborador <strong><?php echo $_SESSION['nome'] ?></strong>.</p>

		<form method="POST" action="">

			<input type="hidden" name="cliente" value="<?php echo $reserva['cliente']; ?>">

			<input type="hidden" name="nome_carro" value="<?php echo $reserva['nome_carro']; ?>">

			<input type="hidden" name="id_carro" value="<?php echo $reserva['id']; ?>">


			<input type="submit" value="Confirmar">
		</form>

		<div id="logo">
			<a href="../painel.php"><button>Voltar</button></a>
		</div>
	</div>
</body>
</html>
