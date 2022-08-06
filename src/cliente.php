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

		public function exibeClientes(): array
		{
			$exibeClientes = $this->conexao->query("SELECT * FROM cadastro_clientes");

			$clientes = $exibeClientes->fetch_all(MYSQLI_ASSOC);

			return $clientes;
		}

		public function deleta(string $cpf): void
		{
			$deleta = $this->conexao->prepare("DELETE FROM cadastro_clientes WHERE cpf=?");

			$deleta->bind_param('s', $cpf);

			$deleta->execute();
		}
	}
