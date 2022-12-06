<?php
	require "protect.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width initial-scale=1.0">
	<link rel="shortcut icon" href="../img/icons.png" type="icon/x-image">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title>Aluguel de veículos</title>
</head>
<body>
	<!-- Início do NavBar -->

	<nav class="navbar navbar-expand-lg navbar-dark fundo_preto fixed-top" style="background-color: #006400;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><img src="../img/icons.png" width="30px" height="30px"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Início</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="admin/cadastro.php">Cadastrar Novo Cliente</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="admin/consulta.php">Consultar Cliente</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="admin/alugar.php">Realizar uma locação</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="admin/devolucao.php">Receber uma devolução</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
 	<br><br><br>
 	<div id="faixa">
 		<div id="sair">
 			<a href="logout.php"><button id="botao">Sair</button></a>
 		</div>
 		<h1>Aluguel de veículos</h1>
 	</div>
 	<div id="container">
 		<?php echo "Seja bem vindo, colaborador <strong>" . strtoupper($_SESSION['nome']) . "</strong> o que deseja fazer?"; ?><br>
 		
 		<br>

 	<article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
	    <div class="card-body">
	      <h5 class="card-title">Cadastrar um novo Cliente</h5>
	      <p class="card-text">Clique no botão abaixo para criar um cadastro para um novo cliente.</p>
	      <a href="admin/cadastro.php" class="btn botao-cor-especial">Clique aqui</a>
	    </div>
    </article>

 		<div id="logo">

	 		<p>

	 			<a href="admin/cadastro.php"><button class="botaoMaior">Cadastrar um novo Cliente</button></a>

	 			<a href="admin/consulta.php"><button class="botaoMaior">Consultar Clientes</button></a>

	 		</p>

	 		<p>
	 			<a href="admin/alugar.php"><button class="botaoMaior">Realizar uma Locação</button></a>

	 			<a href="admin/devolucao.php"><button class="botaoMaior">Devolução locação</button></a>

	 		</p>

 		</div>

 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

