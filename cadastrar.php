<?php
require 'conexao.php';

if( isset($_POST['email']) && empty($_POST['email']) == false && 
	isset($_POST['senha']) && empty($_POST['senha']) == false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO usuarios (emailUsuarios, senhaUsuarios) VALUES ('$email','$senha')";

	$pdo->query($sql);

	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body id="LoginForm">
	<div class="container">
	<h1 class="form-heading">Comunicação Alternativa</h1>
		<div class="login-form">
			<div class="main-div">
			    <div class="panel">
				   <h2>Formulário de Cadastro</h2>
				   <p>Por favor, informe seu e-mail e senha</p>
			   </div>
			    <form id="Login" method="POST">
			        <div class="form-group">
			            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="E-mail">
			        </div>
			        <div class="form-group">
			            <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="Senha">
			        </div>
			        <!--<div class="forgot">
			        	<a href="reset.html">Esqueceu sua senha?</a>
					</div>-->
			        <button id="cadastro" class="btn btn-primary"><a href="adicionar.php">Cadastrar-se</a></button>
			        </form>
			        <button id="cadastro" class="btn btn-primary"><a href="login.php">Voltar</a></button>
			    </div>
		</div>
	</div>
</div>
</body>
</html>