<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['cliente'] = $_POST['cliente'];

	$exibeCarros = New Cliente($conexao);
	$carros = $exibeCarros-> exibeCarros();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Agora escolha o veículo:</h1>

	<?php foreach($carros as $carro): ?>

	<form action="alugar2.php" method="POST">
		<div id="bloco">

				<br><strong>Escolha aqui-></strong><input type="radio" name="carro" value="<?php echo $carro['nome'] . " " . $carro['placa'];?>"><br>

				<strong>Carro</strong> <?php echo $carro['nome'] . '<br>'; ?>
				<strong>Grupo</strong> <?php echo $carro['grupo'] . '<br>'; ?>
				<strong>Placa</strong> <?php echo $carro['placa'] . '<br>'; ?><br>
		</div>
	<?php endforeach; ?>

		<input type="submit" value="Continuar">
	</form>


</body>
</html>