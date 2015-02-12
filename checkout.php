<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/checkout.css">
</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
			</div>
		</div>
		
		<?php 
			$conexao = mysqli_connect("127.0.0.1", "root", "developer", "mirror-fashion");
			$data = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
			$produto = mysqli_fetch_array($data);
		 ?>
		<div class="container">
			<!-- painel com os dados do produto -->
			<div class="panel panel-success">
				<div class="panel-heading">
					<h2 class="panel-title">Sua compra </h2>
				</div>
				<div class="panel-body">
					<img class="img-thumbnail img-responsive" src="img/produtos/foto<?= $produto["id"] ?>-<?= $_POST[cor] ?>.png" alt="<?= $produto["nome"] ?>">
					<dl>
						<dt>ID</dt>
						<dd><?= $_POST["id"] ?></dd>
						<dt>Produto</dt>
						<dd><?= $produto["nome"] ?></dd>
						<dt>Cor</dt>
						<dd> <?= $_POST["cor"] ?> </dd>
						<dt>Tamanho</dt>
						<dd><?= $_POST["tamanho"] ?></dd>
						<dt>Preço</dt>
						<dd><?= $produto["preco"] ?></dd>
					</dl>	
				</div>
			</div>

			<!-- dados do comprador -->

			<form action="">
				<fieldset>
					<legend>Dados pessoais</legend>

					<div class="form-group">
						<label for="nome">Nome completo</label>
						<input type="text" class="form-control" id="nome" name="nome" autofocus required>
					</div>
					
					<div class="form-group">
						<label for="email">Email</label>
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
						</div>
					</div>
					
					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
					</div>

					<div class="checkbox">
						<label>
							<input type="checkbox" value="sim" name="span" checked>
							Quero receber spam da Mirror Fashion
						</label>
					</div>

				</fieldset>
				<fieldset>
					<legend>Cartão de crédito</legend>

					<div class="form-group">
						<label for="numero-cartao">Número - CVV</label>
						<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
					</div>

					<div class="form-group">
						<label for="bandeira-cartao">Bandeira</label>
						<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
							<option value="master">MasterCard</option>
							<option value="visa">Visa</option>
							<option value="amex">American Express</option>
						</select>
					</div>

					<div class="form-group">
						<label for="validade-cartao">validade</label>
						<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
					</div>
				</fieldset>
				<button type="submit" class="btn btn-primary btn-lg pull-right">
					<span class="glyphicon glyphicon-thumbs-up"></span>
					Confirmar Pedido
				</button>
			</form>
		</div>
	<script src="js/checkout.js"></script>			
	</body>
</html>