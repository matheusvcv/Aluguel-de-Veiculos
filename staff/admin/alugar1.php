<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['cpf'] = $_POST['cpf'];

	$exibeCarros = New Cliente($conexao);
	$carros = $exibeCarros-> exibeCarros();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aluguel de Veículos</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
	<div id="faixa">
		<h1>Agora escolha o veículo:</h1>
	</div>
	<div id="container">
		<?php 
			foreach($carros as $carro): if($carro['status'] == 0) {?>

		<form action="alugar2.php" method="POST">
			<div id="faixa1">
				<br><strong>Escolha aqui-></strong><input type="radio" name="carro" value="<?php echo $carro['id'];?>"><br>
			</div>
			<div id="bloco">
					<p>
						<strong>Carro</strong> <?php echo $carro['nome']; ?><br>

						<strong>Grupo</strong> <?php echo $carro['grupo']; ?><br>	

						<strong>Placa</strong> <?php echo $carro['placa']; ?><br>	

						<strong>id</strong> <?php echo $carro['id']; ?><br>
					</p>
			</div>

		<?php } endforeach; ?>

	</div>

			<input type="submit" value="Continuar">
	</form>


</body>
</html>

