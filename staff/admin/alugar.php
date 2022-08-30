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
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
	<link rel="shortcut icon" href="../../img/icons.png" type="icon/x-image">
	<title>Aluguel de veículo</title>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
	<div id="faixa">
		<div id="sair">
 			<a href="../logout.php"><button id="botao">Sair</button></a>
 		</div>
		<h1>Formulário de Aluguel</h1>
	</div>
	<div id="container">
		<p>Olá, <?php echo $_SESSION['nome']; ?>, você é um usuário cadastrado e está iniciando um aluguel de veículo. Inicalmente, defina o cliente que está efetuando a locação:</p>
		<p>Caso o cliente ainda não tenha cadastro, cadaste-o <a href="cadastro.php">clicando aqui</a></p>
		
		<?php foreach($clientes as $cliente): ?>
		<form action="alugar0.php" method="POST">
			<div id="faixa1">
				<strong>Escolha aqui: </strong><input type="radio" name="cliente" value="<?php echo $cliente['nome']; ?>"><br>
			</div>
			<div id="bloco">
					<br><strong>Nome:</strong> <a href="cadastro_ind.php?cpf=<?php echo $cliente['cpf']; ?>"> <?php echo $cliente['nome']; ?><br></a>
					<strong>CPF:</strong> <?php echo $cliente['cpf']; ?><br>
					<strong>Nascimento:</strong> <?php $data = strtotime($cliente['nascimento']); echo date('d/m/y', $data) ?><br>
					<strong>E-mail:</strong> <?php echo $cliente['email']; ?><br>
					<strong>Telefone:</strong> <?php echo $cliente['telefone']; ?><br>
					<strong>Cidade:</strong> <?php echo $cliente['cidade']; ?><br>
					<strong>Bairro:</strong> <?php echo $cliente['bairro']; ?><br>
					<strong>Logradouro:</strong> <?php echo $cliente['logradouro']; ?><br>
					<strong>Número:</strong> <?php echo $cliente['numero']; ?><br>
					<strong>requência:</strong> <?php echo $cliente['frequencia']; ?><br></p>
			</div><br>
			<input type="hidden" name="cpf" value=<?php $cliente['cpf']; ?>>
			<?php endforeach; ?>
			<input type="submit" value="Continuar">
		</div>
		</form>
		<div id="logo">

			<br><a href="../painel.php"><button>Cancelar</button></a><br>
		
		</div>
	</body>
</html>
