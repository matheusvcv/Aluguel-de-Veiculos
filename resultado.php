<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cotação</title>
	<link rel="shortcut icon" href="img/icon.png" type="icon/x-image">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="faixa">
		<h1>Resultado Cotação</h1>
	</div>
	<div id="container">

		<p>Você irá retirar o veículo na cidade de: <?php echo $_POST['local_retirada']; ?></p>
		<p>Na data de <?php $data = strtotime($_POST['data_retirada']); echo date('d/m/y H:i:s', $data); ?></p>
		<p>O veículo será pertencente ao grupo: <?php echo $_POST['grupo']; ?></p>
		<p>E você permanecerá com o veículo pelo período de <?php echo $_POST['periodo']; ?></p>

		<h2>Informações de valores:</h2>

			<?php

				if($_POST['grupo'] === 'A'){

					echo "Você escolheu um carro do <strong> Grupo " . $_POST['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 100,00</strong> por diária.";

				} else if($_POST['grupo'] === 'B') {

					echo "Você escolheu um carro do <strong> Grupo " . $_POST['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 150,00</strong> por diária.";

				} else if ($_POST['grupo'] === 'C'){

					echo "Você escolheu um carro do <strong> Grupo " . $_POST['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 200,00</strong> por diária.";
				}


				if($_POST['periodo']){

				}


			?>



		<!-- 







		<p><strong>Tipos de carro:</strong></p>
		<p>Tipo A = R$ 100,00 por Diária</p>
		<p>Tipo B = R$ 150,00 por Diária</p>
		<p>Tipo C = R$ 200,00 por Diária</p> -->


			<div id="logo">
				<p>
				<a href="index.php"><button>Voltar</button></a>
				</p>
			</div>
	</div>
</body>
</html