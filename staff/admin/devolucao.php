<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$devolucao_veiculo = New Cliente($conexao);
		$devolucao = $devolucao_veiculo-> deletaReserva($_POST['id_carro']);

		header("Location: devolvido.php");
	}

	$carros_locado = New Cliente($conexao);
	$carros = $carros_locado-> exibeCarros();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aluguel de veículo</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
		<div id="faixa">
			<h1>Devolução de veículo:</h1>
		</div>
			<div id="container">
			<p>Qual carro está sendo devolvido?</p>

			<form method="POST" action="">

					<?php foreach($carros as $carro): if($carro['status'] == 1){  ?>
				<div id="faixa1">			
						<p>Escolha aqui: <input type="radio" name="id_carro" value="<?php echo $carro['id']; ?>"></p>
				</div>
				<div id="bloco">
							<p>
								<strong>Carro</strong> <?php echo $carro['nome']; ?><br>

								<strong>Grupo</strong> <?php echo $carro['grupo']; ?><br>	

								<strong>Placa</strong> <?php echo $carro['placa']; ?><br>	

								<strong>id</strong> <?php echo $carro['id']; ?><br>

								<input type="hidden" name="<?php echo $carro['id']; ?>">
							</p>
				
						<?php } endforeach; ?>
				</div><br>
				
				<div id="logo">
					<input type="submit" value="Finalizar">
				</div>
			</div><br>
			</form>
			<div id="logo">
				<a href="../painel.php"><button>Voltar</button></a>
		</div>
	</body>
</html>
