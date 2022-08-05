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
	}