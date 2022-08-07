<?php
	require "conexao.php";
	require "src/cliente.php";
	require "protect.php";


	$clientes = New Cliente($conexao);
	$cliente = $clientes-> exibeIndividual($_GET['cpf']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<?php echo $cliente['cpf']; ?> 
</body>
</html>