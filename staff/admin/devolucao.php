<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";


	$reservasVeiculo = New Cliente($conexao);
	$reservas = $reservasVeiculo-> exibeReservas();

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$_SESSION['id_carro'] = $_POST['reserva'];

		header('Location: devolvido.php');

	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aluguel de veículo</title>
	<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
		<div id="faixa">
			<h1>Devolução de veículo:</h1>
		</div>
		<div id="container">
			
			<form method="POST" action="">

			<?php foreach($reservas as $reserva):  ?>

				<button class="botaoReserva" name="reserva" value="<?php echo $reserva['id_carro']; ?>">

					<strong>Cliente: </strong><?php echo $reserva['cliente']; ?><br>

					<input type="hidden" name="cliente" value="<?php echo $reserva['cliente']; ?>">

					<strong>Veículo: </strong><?php echo $reserva['nome_carro']; ?><br>

					<strong>Retirada: </strong><?php echo $reserva['horario_retirada']; ?><br>

					<strong>Período de Loc:</strong><?php echo $reserva['periodo']; ?><br>

					<strong>Usuário: </strong><?php echo $reserva['usuario']; ?><br>

					<?php $reserva['id_carro']; ?> <br>
					
				</button>

			<?php endforeach; ?>

				</form>

	 			<div id="logo">

				<br><a href="../painel.php"><button>Cancelar</button></a>

			</div>
	</body>
</html>


				


				<!-- <button class="botaoCarro">

					Carro <strong><?php e//cho $carro['nome']; ?></strong><br>

					Grupo <strong><?php //echo $carro['grupo']; ?></strong><br>	

					Placa <strong><?php //echo $carro['placa']; ?></strong><br>

					id <strong><?php //echo $carro['id']; ?></strong><br>

					<input type="hidden" name="id_carro" value="<?php echo $carro['id']; ?>"><br>

	 			</button> -->

	 			

