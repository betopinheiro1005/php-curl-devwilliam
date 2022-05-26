<?php

// URL para onde será enviada a requisição GET
$url_feed = "http://www.devwilliam.com.br/feed";
 
// Inicia a sessão cURL
$ch = curl_init();
 
// Informa a URL onde será enviada a requisição
curl_setopt($ch, CURLOPT_URL, $url_feed);
 
// Se true retorna o conteúdo em forma de string para uma variável
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
// Envia a requisição
$result = curl_exec($ch);
 
// Finaliza a sessão
curl_close($ch);
 
// Transforma a string XML em Objeto
$xml = simplexml_load_string($result);
 
// Percorre os posts do feed

echo "<h3>Feed</h3>";

foreach($xml->channel->item as $post):
    echo "<a href='" . $post->link . "'>" . $post->title . "</a><hr>";
endforeach;
 
?>