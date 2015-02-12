<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- viewport par estilização para mobile -->
	<meta name="viewport" content="width=devide-width">
	<title><?php print $cabecalho_title ?></title>
	<link rel="stylesheet" href="css/reset.css">
	<?php print @$cabecalho_css; ?>	
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">

</head>
<body>
	<header class="container">
		<!--Logo principal-->
		<h1><img src="img/logo.png" alt="MirrorFashion"></h1>
		
		<p class="sacola">Nenhum item na sacola de compras</p>
		<!--Menu de navegação-->
		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Conta</a></li>
				<li><a href="#">Lista de Desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
	</header>