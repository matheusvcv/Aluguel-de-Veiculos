<?php

	require "../conexao.php";

	class Cliente
	{
		private $conexao;

		public function __construct(mysqli $conexao)
		{
			$this->conexao = $conexao;
		}

		public function insereCliente(string $nome, string $cpf, string $nascimento, string $email, string $telefone, string $cidade, string $bairro, string $logradouro, string $numero, string $frequencia)
		{
			$insereCliente = $this->conexao->prepare("INSERT INTO cadastro_clientes(nome, cpf, nascimento, email, telefone, cidade, bairro, logradouro, numero, frequencia) VALUES(?,?,?,?,?,?,?,?,?,?)");

			$insereCliente-> bind_param('ssssssssss', $nome, $cpf, $nascimento, $email, $telefone, $cidade, $bairro, $logradouro, $numero, $frequencia);

			$insereCliente-> execute();
		}

		public function insereReserva(string $cliente, string $cpf_cliente, int $carro, string $horario_retirada, string $periodo, int $id_usuario){

			$insereReserva= $this->conexao->prepare("INSERT INTO reservas(cliente, cpf_cliente, id_carro, horario_retirada, periodo, id_usuario) VALUES(?,?,?,?,?,?)");

			$insereReserva-> bind_param('ssissi', $cliente, $cpf_cliente, $carro, $horario_retirada, $periodo, $id_usuario);

			$insereReserva-> execute();

			$atualiza = $this->conexao("UPDATE reservas");
		}

		public function exibeClientes(): array
		{
			$exibeClientes = $this->conexao->query("SELECT * FROM cadastro_clientes");

			$clientes = $exibeClientes->fetch_all(MYSQLI_ASSOC);

			return $clientes;
		}
		
		public function exibeCarros(): array
		{
			$exibeClientes = $this->conexao->query("SELECT * FROM carros");

			$clientes = $exibeClientes->fetch_all(MYSQLI_ASSOC);

			return $clientes;
		}

		public function exibeIndividual(string $cpf): array
		{
			$exibirCliente = $this->conexao->query("SELECT * FROM cadastro_clientes WHERE cpf = $cpf");

			$exibir = $exibirCliente->fetch_assoc();

			return $exibir;
		}


		public function deleta(string $cpf): void
		{
			$deleta = $this->conexao->prepare("DELETE FROM cadastro_clientes WHERE cpf=?");

			$deleta->bind_param('s', $cpf);

			$deleta->execute();
		}


		public function altera(string $nome, string $nascimento, string $email, string $telefone, string $cidade, string $bairro, string $logradouro, string $numero, string $frequencia, string $cpf): void
		{
			$altera =  $this->conexao->prepare("UPDATE cadastro_clientes SET nome=?, nascimento=?, email=?, telefone=?, cidade=?, bairro=?, logradouro=?, numero=?, frequencia=? WHERE cpf = ?");

			$altera-> bind_param('ssssssssss', $nome, $nascimento, $email, $telefone, $cidade, $bairro, $logradouro, $numero, $frequencia, $cpf);

			$altera->execute();
		}
	}
