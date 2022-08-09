<?php

	require "../protect.php";
	require "../conexao.php";
	require "../src/cliente.php";

	$_SESSION['carro'] = $_POST['carro'];

	echo $_SESSION['cliente'] . "<br>";
	echo $_SESSION['carro'] . "<br>";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

		<input type="submit" value="Continuar">
	</form>


</body>
</html>