
<?php
include 'conexao.php';


$sql = "SELECT nome_sujeito, caminho_sujeito FROM sujeitos WHERE id_sujeito = 1 ";

$sql = $pdo->query($sql);

if($sql->rowCount() > 0){
			foreach ($sql->fetchAll() as $usuario) {
				$usuario['nome_sujeito'];
				$usuario['caminho_sujeito'];
			}
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Verbos - Comunicação Alternativa</title>
	<meta charset="utf-8">
	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<!--Barra do topo-->

	<div class="topo">
		<div class="topoint">
			<div class="toporight">
				<a href=""><img src="assets/images/sair.png" border="0"  height="35"/></a>
				<a href="perfil.php"><img src="assets/images/perfil.png" border="0" height="35"/></a>
				<a href="">Bem vindo, Matheus!</a>
			</div>
		</div>
	</div>

	<div class="title_top">
		<div class="title">
			Verbos
		</div>
	</div>

	<div class="prancha_externa">
		<div class="prancha_interna">

			<div class="prancha_ambiente">
				<img src= "<?php echo $usuario['caminho_sujeito']; ?>" border="0"/>
			</div>
			<div class="prancha_sujeito">
				<img src="" border="0">
			</div>
			<div class="prancha_verbo">
				<img src="" border="0">
			</div>
			<div class="prancha_complemento">
				<img src="" border="0">
			</div>
		</div>
	</div>

	<!--Espaço para imagens--->
	<div class="area_figuras">
		<div class="figura_1">
			<a href="complemento.php">
				<img src="assets/images/ambientes/verbos/correr.png">
			</a>
		</div>
		<div class="figura_2">
			<a href="complemento.php">
				<img src="assets/images/ambientes/verbos/brincar.png">
			</a>
		</div>
		<div class="figura_3">
			<a href="complemento.php">
				<img src="assets/images/ambientes/verbos/assistir.png">
			</a>
		</div>
		<div class="figura_4">
			<a href="complemento.php">
				<img src="assets/images/ambientes/verbos/mexer_computador.png">
			</a>
		</div>
	</div>

	<!--Home-->
	<div class="home_externo">
		<div class="home_interno">
			<div class="arrow_left">
				<a href="">
					<img id="arrow_left" src="assets/images/left.png" border="0">
				</a>
			</div>
			<div class="home">
				<a href="index.php">
					<img id="home" src="assets/images/home.png" border="0">
				</a>
			</div>
			<div class="arrow_right">
				<a href="">
					<img id="arrow_right" src="assets/images/right.png" border="0">
				</a>
			</div>
		</div>
	</div>

	<!--rodape-->
	<div class="footer">
        2018 &copy; Todos os direitos reservados
    </div>
</body>
</html>