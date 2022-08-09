<?php
	include 'conexao.php';

	if(isset($_POST['email']) || isset($_POST['senha'])){

		if(strlen($_POST['email']) == 0){

			echo "Por favor, o campo corretamente com seu e-mail";

		} else if(strlen($_POST['senha']) == 0){

			echo "Por favor, o campo corretamente com sua senha.";

		}else{

			$email = $conexao-> real_escape_string($_POST['email']);
			$senha = $conexao-> real_escape_string($_POST['senha']);

			$codigo_consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
			$sql_consulta = $conexao->query($codigo_consulta) or die('Falha na execução do código SQL!');

			$quantidade = $sql_consulta->num_rows;

			if($quantidade === 1){

				$usuario = $sql_consulta-> fetch_assoc();

				if(!isset($_SESSION)){

					session_start();
				}

				$_SESSION['id'] = $usuario['id'];
				$_SESSION['nome'] = $usuario['nome'];

				header("Location: painel.php");

			}else{

				echo "Falha ao logar! E-mail ou senha incorretos!";
			}

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<form action="" method="POST">
		<p>
			<label>E-Mail:</label>
			<input type="text" name="email">
		</p>
		<p>
			<label>Senha:</label>
			<input type="password" name="senha">
		</p>
		<p>
			<button type="submit">Entrar</button>
		</p>
	</form>
	<p>Se você é um cliente, <a href="../index.php">clique aqui!</a></p>
</body>
</html>