<?php 
	require "../conexao.php";
	require "../src/cliente.php";

	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		$deletar = New Cliente($conexao);
		$deletar-> deleta($_POST['cpf']);

		header('Location: consulta.php');

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<title>Detala Cliente</title>
</head>
<body>
	<form action="deletar.php" method="POST">
		<p><h1>Você tem certeza que deseja excluir o cadastro deste clinete?</h1></p><br>
		<input type="hidden" name="cpf" value="<?php echo $_GET['cpf']; ?>">
		<p><input type="submit" value="Excluir"></p>	
	</form>
	<a href="consulta.php?cpf=<?php echo $cliente['cpf']; ?>"><button>Voltar</button></a>
</body>
</html>