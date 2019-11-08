<?php
    session_start();
?>

<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
   		<link href="EstiloPadrao.css" rel="stylesheet">
    	<script type="text/javascript" src="homepage.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif&amp;display=swap" rel="stylesheet">
		<title>Minha Conta</title>
	</head>
	<body>
		<div class="dados">
			<article>
				<h1> Login Efetuado com Sucesso! <h1>
				<h1> Bem vindo <h1>
				<h2> Ainda Estamos trabalhando nessa página! <br> Volte em breve! </h2>
				<button onclick="mudarestado('dados','jogo')"><strong>Cadastrar jogos</strong></button>
			</article>
		</div>
		<div class="jogo">
			<form method="post" action="../controllers/PostsControllerGame.php">
				<label>Titulo</label>
				<input id = "titulo" name="titulo" required="required" type="text" placeholder="Título">
				<br>
				<label>Data de Lançamento</label>
				<input id = "lancamento" name="lancamento" required="required" type="text">
				<br>
				<label>Estado do jogo</label>
				<input id = "estado" name="estado" required="required" type="text" placeholder="Estado do jogo">
				<br>
				<label>Categoria</label>
				<input id = "categoria" name="categoria" required="required" type="text" placeholder="Categoria">
				<br>
				<input type="submit" value="cadastrar">
			</form>
		</div>
		<footer>
			<button>Sobre</button>
			<button>Quem somos</button>
			<button>Contato</button>
			<p>Criado e Desenvolvido por Hackers<br>Copyright<br>2019<p>
		</footer>

	</body>
</html>
