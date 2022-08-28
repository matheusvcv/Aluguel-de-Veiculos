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
	<h2>Carros disponíveis para locação:</h2>
		<?php foreach($carros as $carro): if($carro['status'] == 0){ ?>

			<p>

			<form action="alugar2.php" method="POST">

	 			<button class="botaoCarro">

					Carro <strong><?php echo $carro['nome']; ?></strong><br>

					Grupo <strong><?php echo $carro['grupo']; ?></strong><br>	

					Placa <strong><?php echo $carro['placa']; ?></strong><br>	

					<input type="hidden" name="carro" value="<?php echo $carro['id']; ?>"><br>

	 			</button>

			</form>

		</p>

		<?php } endforeach; ?>

		<h2>Carros disponíveis para locação:</h2>

		<?php foreach($carros as $carro): if($carro['status'] == 1){ ?>

			<p>
				
	 			<button class="botaoCarro">

					Carro <strong><?php echo $carro['nome']; ?></strong><br>

					Grupo <strong><?php echo $carro['grupo']; ?></strong><br>	

					Placa <strong><?php echo $carro['placa']; ?></strong><br>	


	 			</button>

			</form>

		</p>

		<?php } endforeach; ?>


		<br><br><br><br>

		<form action="alugar2.php" method="POST">
			<div id="faixa1">
				<br><strong>Escolha aqui:</strong><input type="radio" name="carro" value="<?php echo $carro['id'];?>"><br>
			</div>
			<div id="bloco">
					<p>
						<strong>Carro</strong> <?php echo $carro['nome']; ?><br>

						<strong>Grupo</strong> <?php echo $carro['grupo']; ?><br>	

						<strong>Placa</strong> <?php echo $carro['placa']; ?><br>	

						<strong>id</strong> <?php echo $carro['id']; ?><br>
					</p>
			</div>

		
		<input type="submit" value="Continuar">
		</form>

	</div>
	<div id="container">
	<h2>Carros indisponíveis (Já locados):</h2>

		<?php foreach($carros as $carro): if($carro['status'] == 1){ ?>
			<div id="faixa1">
				<p>Indisponível</p>
			</div>
			<div id="bloco">
				<p>
					<strong>Carro</strong> <?php echo $carro['nome']; ?><br>

					<strong>Grupo</strong> <?php echo $carro['grupo']; ?><br>	

					<strong>Placa</strong> <?php echo $carro['placa']; ?><br>	

					<strong>id</strong> <?php echo $carro['id']; ?><br>
				</p>
			</div>
	</div>

		<?php } endforeach;  ?>

</body>
</html>

