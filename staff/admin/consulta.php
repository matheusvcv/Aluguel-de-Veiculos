<?php
	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$exibeClientes = New Cliente($conexao);
	$clientes = $exibeClientes-> exibeClientes();

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
		<div id="faixa">
			<h1>Clientes Cdastrados</h1>
		</div>

		<div id="container">

		<?php foreach($clientes as $cliente): ?>

			<div id="bloco">

				<p>
				<strong>Nome:</strong> <a href="cadastro_ind.php?cpf=<?php echo $cliente['cpf']; ?>"> <?php echo $cliente['nome']; ?><br></a>
				<strong>CPF:</strong> <?php echo $cliente['cpf']; ?><br>
				<strong>Nascimento:</strong> <?php echo $cliente['nascimento']; ?><br>
				<strong>E-mail:</strong> <?php echo $cliente['email']; ?><br>
				<strong>Telefone:</strong> <?php echo $cliente['telefone']; ?><br>
				<strong>Cidade:</strong> <?php echo $cliente['cidade']; ?><br>
				<strong>Bairro:</strong> <?php echo $cliente['bairro']; ?><br>
				<strong>Logradouro:</strong> <?php echo $cliente['logradouro']; ?><br>
				<strong>Número:</strong> <?php echo $cliente['numero']; ?><br>
				<strong>requência:</strong> <?php echo $cliente['frequencia']; ?><br></p>
				<p>
				<a href="deletar.php?cpf=<?php echo $cliente['cpf']; ?>"><button>Excluir</button></a>
				<a href="altera.php?cpf=<?php echo $cliente['cpf']; ?>"><button>Alterar</button></a>
				</p>

			</div><br>

			<?php endforeach; ?>
		</div>

			<a href="../painel.php"><button>Voltar</button></a>
	</body>
</html>


			







