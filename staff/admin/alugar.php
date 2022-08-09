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
	<title></title>
</head>
<body>
	<h1>Fnalização de Aluguel</h1>
	<p>Olá, <?php echo $_SESSION['nome']; ?>, você é um usuário cadastrado e está iniciando um aluguel de veículo. Inicalmente, defina o cliente que está efetuando a locação:</p>
	<p>Caso o cliente ainda não tenha cadastro, cadaste-o <a href="cadastro.php">clicando aqui</a></p>
	
	<?php foreach($clientes as $cliente): ?>
	<form action="alugar1.php" method="POST">
		<div id="bloco">

				<strong>Escolha aqui-></strong><input type="radio" name="cliente" value="<?php echo $cliente['nome'] . " " . $cliente['cpf']; ?>"><br>

				<?php echo $cliente['nome'] . '<br>'; ?>
				<?php echo $cliente['cpf'] . '<br>'; ?>
				<?php echo $cliente['nascimento'] . '<br>'; ?>
				<?php echo $cliente['email'] . '<br>'; ?>
				<?php echo $cliente['telefone'] . '<br>'; ?>
				<?php echo $cliente['cidade'] . '<br>'; ?>
				<?php echo $cliente['bairro'] . '<br>'; ?>
				<?php echo $cliente['logradouro'] . '<br>'; ?>
				<?php echo $cliente['numero'] . '<br>'; ?>
				<?php echo $cliente['frequencia'] . '<br>'; ?></p>

				<?php endforeach; ?>
		</div><br>
		<input type="submit" value="enviar">

	</form>





</body>
</html>