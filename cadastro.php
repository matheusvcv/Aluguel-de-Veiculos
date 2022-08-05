<?php
	require "protect.php";
	require "conexao.php";
	require "cliente.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" width="device-width, initial-scale=1.0">
		<title>Cadastro do Cliente</title>
	</head>
	<body>
		<h1>Cadastro do Cliente</h1>
		<form action="" method="POST">
			<strong><p>Informações Pessoais:</p></strong>
			<p>
				<label>Nome do Cliente: </label><input type="text" name="nome" placeholder="Nome Completo">
			</p>
			<p>
				<label>CPF do Cliente: </label><input type="text" name="cpf" placeholder="Digite o CPF do Cliente">
			</p>
			<p>
				<label>Data de nascimento: </label><input type="date" name="Nascimento" placeholder="">
			</p>
			<strong><p>Dados para Contato: </p></strong><p>
			<p>
				<label>E-Mail: </label><input type="text" name="e-mail" placeholder="Melhor E-Mail">
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
				<select name="frequência">
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
	</body>
</html>