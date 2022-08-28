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

		<p>

			<?php

				if($_POST['grupo'] === 'A'){

					$preco = 100;

					echo "Você escolheu um carro do <strong> Grupo " . $_POST['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 100,00</strong> por diária.";

				} else if($_POST['grupo'] === 'B') {

					$preco = 150;

					echo "Você escolheu um carro do <strong> Grupo " . $_POST['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 150,00</strong> por diária.";

				} else if ($_POST['grupo'] === 'C'){

					$preco = 200;

					echo "Você escolheu um carro do <strong> Grupo " . $_POST['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 200,00</strong> por diária.";
				}

			?>
		</p>

			<?php

				if($_POST['periodo'] === 'Não Definiu'){

					echo "Nenhum período de locação foi definido!";


				} else if($_POST['periodo'] === 'um_dia'){

					$valorTotal = $preco * 1;

					echo "Sendo assim, o valor total pelo período de " . $_POST['periodo'] . " é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_POST['periodo'] === 'tres_dias'){

					$valorTotal = $preco * 3;

					echo "Sendo assim, o valor total pelo período de " . $_POST['periodo'] . " é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_POST['periodo'] === 'uma_semana'){

					$valorTotal = $preco * 7;

					echo "Sendo assim, o valor total pelo período de " . $_POST['periodo'] . " é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_POST['periodo'] === 'duas_semanas'){

					$valorTotal = $preco * 15;

					echo "Sendo assim, o valor total pelo período de " . $_POST['periodo'] . " é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_POST['periodo'] === 'um_mes'){

					$valorTotal = $preco * 30;

					echo "Sendo assim, o valor total pelo período de " . $_POST['periodo'] . " é <strong> R$ " . $valorTotal . ",00 </strong>.";

				}



			?>



		<!-- 

				<select name="periodo">
					<option value="Não Definiu">Escolha uma opção:</option>
					<option value="um_dia">01 Dia</option>
					<option value="tres_dias">03 Dias</option>
					<option value="uma_semana">01 Semana</option>
					<option value="duas_semanas">02 Semanas</option>
					<option value="um_mes">01 mês</option>
				</select>





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