<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	if($_SERVER['REQUEST_METHOD'] === 'POST'){


		$alterarCadastro = New Cliente($conexao);
		$altera = $alterarCadastro-> altera($_POST['nome'], $_POST['nascimento'], $_POST['email'], $_POST['telefone'], $_POST['cidade'], $_POST['bairro'], $_POST['logradouro'], $_POST['numero'], $_POST['frequencia'], $_POST['cpf'],);

		header('Location: consulta.php');

	}

	$clientes = New Cliente($conexao);
	$cliente = $clientes-> exibeIndividual($_GET['cpf']);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<title>Alterar Cadastro do Cliente</title>
</head>
<body>
	<h1>Dados dos Clientes</h1>

<form action="altera.php" method="POST">


			<p>
				<label>CPF: </label><input type="text" name="cpf" value="<?php echo $cliente['cpf']; ?>">
			</p>
			<p>
				<label>Nome: </label><input type="text" name="nome" value="<?php echo $cliente['nome']; ?>">
			</p>
			<p>
				<label>Data de Nascimento: </label><input type="date" name="nascimento" value="<?php echo $cliente['nascimento']; ?>">
			</p>
			<p>
				<label>E-mail: </label><input type="text" name="email" value="<?php echo $cliente['email']; ?>">
			</p>
			<p>
				<label>Telefone: </label><input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>">
			</p>
			<p>
				<label>Cidade: </label><input type="text" name="cidade" value="<?php echo $cliente['cidade']; ?>">
			</p>
			<p>
				<label>Bairro: </label><input type="text" name="bairro" value="<?php echo $cliente['bairro']; ?>">
			</p>
			<p>
				<label>Logradouro: </label><input type="text" name="logradouro" value="<?php echo $cliente['logradouro']; ?>">
			</p>
			<p>
				<label>Número: </label><input type="text" name="numero" value="<?php echo $cliente['numero']; ?>">
			</p>
			<p>
				<label>Frequência: </label><input type="text" name="frequencia" value="<?php echo $cliente['frequencia']; ?>">
			</p>

			<input type="hidden" name="cpf" value="<?php echo $cliente['cpf']; ?>">

			<input type="submit" value="Alterar">

		</form>

</body>
</html>