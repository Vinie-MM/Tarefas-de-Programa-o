<?php

include_once("conexao.php");

$filme = $_POST['Filme'];

$movie_name = urlencode($filme);

$api_key = '8dd1238f48ed67a57227be8f38e26f06';

$url = "https://api.themoviedb.org/3/search/movie?api_key=$api_key&query=$movie_name&language=pt-BR";



$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$movie_data = json_decode($response, true);

if($movie_data && isset($movie_data['results']) && count($movie_data['results']) > 0){
	$filmes = $movie_data['results'][0];
	$data_lancamento = $filmes['release_date'];

	$filme_id = $filmes['id'];
	$titulos = $filmes['title'];

	$filmeUrl = "https://api.themoviedb.org/3/movie/$filme_id?api_key=$api_key&append_to_response=credits&language=pt-BR";

	$ch = curl_init($filmeUrl);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$filme_info = curl_exec($ch);

	curl_close($ch);

	$filme_detalhes = json_decode($filme_info, true);

	if($filme_detalhes){
		$titulo = $titulos;
		$lancamento = $data_lancamento;

		foreach ($filme_detalhes['credits']['crew'] as $crew) {
			if($crew['job'] === 'Director'){
				$diretor = $crew['name'];
			}
		}
		$direcao = $diretor;
		$sinopse = $filme_detalhes['overview'];

		$query = "INSERT into tbfilmes (nomeFilme, lancamentoFilme, diretorFilme, sinopseFilme) VALUES ('$titulo', '$lancamento', '$direcao', '$sinopse')";



		mysqli_query($conexao, $query);
		header('location: FilmesCadastrados.php');
	}
	else{
		header("location:javascript:alert(\"Problemas em encontrar o Filme!\");location.href=\"cadFilme.php\";");
	}
}
echo "Algo deu errado";

?>