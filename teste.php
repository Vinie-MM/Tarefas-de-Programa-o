<?php

$cep = "07995000";

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
		echo "CEP: " . $endereco['cep'] . "</br>";
		echo "Logradouro: " . $endereco['logradouro'] . "</br>";
		echo "Bairro: " . $endereco['bairro'] . "</br>";
		echo "Cidade: " . $endereco['localidade'] . "</br>";
		echo "Estado: " . $endereco['uf'] . "</br>";
	}


}



?>