<?php
	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$inserir = New Cliente($conexao);
		$inserir-> insereCliente($_POST['nome'], $_POST['cpf'], $_POST['nascimento'], $_POST['email'], $_POST['telefone'], $_POST['cidade'], $_POST['bairro'], $_POST['logradouro'], $_POST['numero'], $_POST['frequencia']);

			header("Location: consulta.php");

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>Cadastro do Cliente</title>
	</head>
	<body>
		<div id="faixa">
			<h1>Cadastro do Cliente</h1>
		</div>
		<div id="login">
			<form action="" method="POST">
				<strong><p>Informações Pessoais:</p></strong>
				<p>
					<label>Nome do Cliente: </label><input type="text" name="nome" placeholder="Nome Completo">
				</p>
				<p>
					<label>CPF do Cliente: </label><input type="text" name="cpf" placeholder="Digite o CPF do Cliente">
				</p>
				<p>
					<label>Data de nascimento: </label><input type="date" name="nascimento" placeholder="">
				</p>
				<strong><p>Dados para Contato: </p></strong><p>
				<p>
					<label>E-Mail: </label><input type="text" name="email" placeholder="Melhor E-Mail">
				</p>
				<p>
					<label>Telefone: </label><input type="text" name="telefone" placeholder="Telefone para Contato">
				</p>
				<strong><p>Endereço: </p></strong>
				<p>
					<label>Cidade: </label><input type="text" name="cidade" placeholder="Cidade do Cliente">
				</p>
				<p>
					<label>Bairro: </label><input type="text" name="bairro" placeholder="Bairro do Cliente">
				</p>
				<p>
					<label>Logradouro: </label><input type="text" name="logradouro" placeholder="Logradouro do cliente">
				</p>
				<p>
					<label>Número: </label><input type="number" name="numero" placeholder="Número da Casa/Apartamento/Escritório">
				</p>
				<p>Informações adicionais: </p>
				<p>
					<strong>Com qual frequência o cliente utiliza os serviços da nossa empresa?</strong>
					<select name="frequencia">
						<option value="ND">Escolha uma opção</option>
						<option value="Ocasionalmente">Ocasionalmente</option>
						<option value="Mensalmente">Mensalmente</option>
						<option value="Semanalmente">Semanalmente</option>
						<option value="Diariamente">Diariamente</option>
						<option value="Primeira Visita">Primeira Visita</option>
					</select>	
				</p>
				<input type="submit" value="Cadastrar">
			</form>
		</div>
		<br><a href="../painel.php"><button>Voltar</button></a>
	</body>
</html>