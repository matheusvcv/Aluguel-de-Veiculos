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
		<link rel="stylesheet" type="text/css" href="../style.css">
		<title>Cadastro do Cliente</title>
	</head>
	<body>
		<h1>Clientes Cdastrados</h1>


		<?php foreach($clientes as $cliente): ?>

		<div id="bloco">

			<p><?php echo $cliente['nome'] . '<br>'; ?>
			<?php echo $cliente['cpf'] . '<br>'; ?>
			<?php echo $cliente['nascimento'] . '<br>'; ?>
			<?php echo $cliente['email'] . '<br>'; ?>
			<?php echo $cliente['telefone'] . '<br>'; ?>
			<?php echo $cliente['cidade'] . '<br>'; ?>
			<?php echo $cliente['bairro'] . '<br>'; ?>
			<?php echo $cliente['logradouro'] . '<br>'; ?>
			<?php echo $cliente['numero'] . '<br>'; ?>
			<?php echo $cliente['frequencia'] . '<br>'; ?></p>
			<p>
			<a href="deletar.php?cpf=<?php echo $cliente['cpf']; ?>"><button>Excluir</button></a>
			<a href="altera.php?cpf=<?php echo $cliente['cpf']; ?>;"><button>Alterar</button></a>
			</p>

		</div><br>

		<?php endforeach; ?>

			<a href="../painel.php"><button>Voltar</button></a>
	</body>
</html>


			







