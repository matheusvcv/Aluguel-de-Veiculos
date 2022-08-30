<?php
	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>Cadastro do Cliente</title>
	</head>
	<body>
<body>
	<div id="faixa">
		<div id="sair">
 			<a href="../logout.php"><button id="botao">Sair</button></a>
 		</div>
		<h1>Locação realizada com sucesso.</h1>
	</div>
	<div id="container">
		<div id="logo">
			<h2>Locação finalizada.</h2>
		</div>

		<p>Confirmado em sistema que o usuário <strong><?php echo strtoupper($_SESSION['nome']); ?></strong> efetuou a locação do veículo <?php echo $_SESSION['nome_carro']; ?> para o cliente  <strong><?php echo $_SESSION['cliente']; ?></strong>, pelo período de  <strong><?php echo $_SESSION['periodo'] ?></strong>.</p>
		<p>

		<div id="logo">
			<h2>Dados da Locação</h2>

			<p style="text-align: justify;">
				<strong>Cliente: </strong> <?php echo $_SESSION['cliente']; ?><br>
				<strong>CPF: </strong> <?php echo $_SESSION['cpf']; ?><br>
				<strong>Carro: </strong> <?php echo $_SESSION['nome_carro']; ?><br>
				<strong>Retirada em: </strong> <?php $data = strtotime($_SESSION['horario_retirada']); echo date('d/m/y H:i:s', $data); ?><br>
				<strong>Período: </strong><?php echo $_SESSION['periodo']; ?><br>
				<strong>Usuário Locador: </strong> <?php echo $_SESSION['nome']; ?><br>

			</p>

			<?php 
				if($_SESSION['grupo'] === 'A'){

						$preco = 100;

						echo "Você escolheu um carro do <strong> Grupo " . $_SESSION['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 100,00</strong> por diária. ";

					} else if($_SESSION['grupo'] === 'B') {

						$preco = 150;

						echo "Você escolheu um carro do <strong> Grupo " . $_SESSION['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 150,00</strong> por diária. ";

					} else if ($_SESSION['grupo'] === 'C'){

						$preco = 200;

						echo "Você escolheu um carro do <strong> Grupo " . $_SESSION['grupo'] . "</strong>. Carros deste grupo custam <strong>R$ 200,00</strong> por diária. ";
					}



				if($_SESSION['periodo'] === 'um_dia'){

					$valorTotal = $preco * 1;

					echo "Sendo assim, o valor total pelo período de um dia é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_SESSION['periodo'] === 'tres_dias'){

					$valorTotal = $preco * 3;

					echo "Sendo assim, o valor total pelo período de três dias é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_SESSION['periodo'] === 'uma_semana'){

					$valorTotal = $preco * 7;

					echo "Sendo assim, o valor total pelo período de uma semana é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_SESSION['periodo'] === 'duas_semanas'){

					$valorTotal = $preco * 15;

					echo "Sendo assim, o valor total pelo período de duas semanas é <strong> R$ " . $valorTotal . ",00 </strong>.";


				} else if($_SESSION['periodo'] === 'um_mes'){

					$valorTotal = $preco * 30;

					echo "Sendo assim, o valor total pelo período de um mês é <strong> R$ " . $valorTotal . ",00 </strong>.";

				}

			?><br>
			<p><a href="../painel.php"><button>Voltar</button></a></p>
		</div>
	</div>
</body>
</html>


