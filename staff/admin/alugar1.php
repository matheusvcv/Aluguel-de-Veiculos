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
	<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
	<div id="faixa">
	<div id="sair">

 		<a href="../logout.php"><button id="botao">Sair</button></a>

 	</div>
		<h1>Agora escolha o veículo:</h1>
	</div>

	<div id="container">

		<h2>Carros disponíveis para locação:</h2><br>

		<form action="alugar2.php" method="POST">

		<p>

		<?php foreach($carros as $carro): if($carro['status'] == 0){ ?>


	 			<button class="botaoCarro"  name="carro" value="<?php echo $carro['id']; ?>">

					Carro <strong><?php echo $carro['nome']; ?></strong><br>

					Grupo <strong><?php echo $carro['grupo']; ?></strong><br>	

					Placa <strong><?php echo $carro['placa']; ?></strong><br>

					ID <strong><?php echo $carro['id']; ?></strong>

				
					<input type="hidden" name="grupo" value="<?php echo $carro['grupo']; ?>">

				</button>

		<?php } endforeach; ?>

		</p>

		</form>

		<br><h2>Carros disponíveis para locação:</h2>

		<?php foreach($carros as $carro_loc): if($carro_loc['status'] == 1){ ?>

	 			<button class="botaoCarro" style="background-color: #696969;">

					Carro <strong><?php echo $carro_loc['nome']; ?></strong><br>

					Grupo <strong><?php echo $carro_loc['grupo']; ?></strong><br>	

					Placa <strong><?php echo $carro_loc['placa']; ?></strong><br>	

	 			</button>


		<?php } endforeach; ?>

	</div>
	
	<div id="logo">

		<br><a href="../painel.php"><button>Cancelar</button></a>

	</div>

			
</body>
</html>

