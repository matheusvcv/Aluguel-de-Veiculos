<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['periodo'] = $_POST['periodo'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
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
		
</body>
</html>