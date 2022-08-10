<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['periodo'] = $_POST['periodo'];

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$locacao = New Cliente($conexao);
		$locado = $locacao-> insereReserva($_SESSION['cliente'],  $_SESSION['cpf'], $_SESSION['carro'], $_SESSION['horario_retirada'], $_SESSION['periodo'], $_SESSION['id']);

		header('Location: finalizado.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<form action="" method="POST">	
			<p>
				Cliente: <?php echo $_SESSION['cliente']; ?>
			</p>
			<p>
				Veículo locado: <?php echo $_SESSION['carro']; ?>			
			</p>
			<p>
				Data de Retirada: <?php echo $_SESSION['horario_retirada']; ?>	
			</p>
			<p>
				Periodo de locação: <?php echo $_SESSION['periodo']; ?>
			</p>
			<p>
				Vendedor Responsável: <?php echo $_SESSION['nome']; ?>
			</p>
			<p>
				<?php echo $_SESSION['cpf'] ?>
			</p>

			<input type="submit" value="Finalizar">
		</form>

		
</body>
</html>