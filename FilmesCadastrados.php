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
			overflow: scroll;
		}
	</style>
<center>
	<div>
		<?php

		include_once('conexao.php');

		$sql = "SELECT * FROM tbfilmes ORDER by idFilme";
		$result = $conexao->query($sql);

		if ($result->num_rows > 0) {
  		// output data of each row
  		while($row = $result->fetch_assoc()) {
    	echo "ID: " . $row["idFilme"] ."</br>";
    	echo "Titulo: " . $row["nomeFilme"] ."</br>";
    	echo "Data de Lançamento: " . $row["lancamentoFilme"] ."</br>";
    	echo "Diretor: " . $row["diretorFilme"] ."</br>";
    	echo "Sinopse: " . $row["sinopseFilme"] ."</br>";
    	echo "</br>";
  		}
  		
}

		?>
		<a href="cadFilme.php">Clique aqui para fazer mais um cadastro</a>
	</div>
</center>

</body>
</html>