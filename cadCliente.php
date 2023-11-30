<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tipo de Cadastro</title>
</head>
<body>
	
	<style>
		body{
			background-color: lightskyblue;
			align-content: center;
			text-align: center;
		}

		div{
			border-style: solid;
			height: 320px;
			width: 450px;
			align-content: center;
			background-color: ghostwhite;
		}
	</style>
<center>
	<div>
		<h1>Digite as informações abaixo</h1>
		
		<form action="cadastroCliente.php" method="POST">
			<label for="">Nome: </label><br>
			<input type="text" placeholder="Digite Aqui" name="Nome"><br>
			<label for="">CEP: </label><br>
			<input type="text" placeholder="Digite Aqui" name="CEP"><br>
			<input type="submit" value="Enviar">
		</form>
		<br>
		<a href="index.php">Voltar</a>
	</div>
</center>

</body>
</html>