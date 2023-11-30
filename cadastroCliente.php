<?php

include_once("conexao.php");

$nome = $_POST['Nome'];
$cep = $_POST['CEP'];

$url = "https://viacep.com.br/ws/{$cep}/json/";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

if ($response) {

	$endereco = json_decode($response, true);

	if(isset($endereco['erro'])){
		echo "CEP não encontrado tente novamente";
	} else{
		$ceps = $endereco["cep"];
		$logra = $endereco["logradouro"];
		$bairro = $endereco["bairro"];
		$uf = $endereco["localidade"];



		$query = "INSERT into tbcliente (nomeCliente, cepCliente, enderecoCliente, bairroCliente, cidadeCliente) VALUES ('$nome', '$ceps', '$logra', '$bairro', '$uf')";



		mysqli_query($conexao, $query);
		header('location: ClientesCadastrados.php');
	}
}
else{
	header("location:javascript:alert(\"Problemas em encontrar o CEP!\");location.href=\"cadCliente.php\";");
}



?>






