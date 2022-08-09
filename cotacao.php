<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cotação</title>
</head>
<body>
	<h1>Cotação de Veículo</h1>
	<form action="" method="POST">
		<p>Por favor, preencha os campos abaixo:</p>
		<p>
		<label><strong>Em qual cidade você gostaria de retirar o veículo?</strong></label>
			<select name="local_retirada">
				<option value="Não Definiu">Escolha uma opção:</option>
				<option value="Brasilia">Brasília</option>
				<option value="Sao Paulo">Sao Paulo</option>
				<option value="Rio de Janeiro">Rio de Janeiro</option>
			</select>
		<p>
			<label><strong>Em qual data e horário você gostaria de retirar o veículo? </strong></label><input type="datetime-local" name="data_retirada">
		</p>
		<p>
			<label><strong>Em qual data e horário você gostaria de devolver o veículo? </strong></label><input type="datetime-local" name="data_devolucao">
		</p>
			<label><strong>Qual grupo de veículo você gostaria de alugar?</strong></label>
			<p><input type="radio" name="grupo" value="A">Grupo "A" - Hatch Compato;</p>
			<p><input type="radio" name="grupo" value="B">Grupo "B" - Sedã Médio;</p>
			<p><input type="radio" name="grupo" value="C">Grupo "C" - SUV;</p>
		</p>
		<p>
		<label><strong>Por quanto tempo você gostaria de Locar o Veículo?</strong></label>
			<select name="local_retirada">
				<option value="Não Definiu">Escolha uma opção:</option>
				<option value="um_dia">01 Dia</option>
				<option value="tres_dias">03 Dias</option>
				<option value="uma_semana">01 Semana</option>
				<option value="duas_semanas">02 Semanas</option>
				<option value="um_mes">01 mês</option>
			</select>
		<p>
		<input type="submit" value="cotar">
	</form>
	<a href="index.php"><button>Voltar</button></a>
</body>
</html>