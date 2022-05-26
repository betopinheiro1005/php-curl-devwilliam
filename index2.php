<?php
 
// URL para onde será enviada a requisição GET
$url_data = "http://localhost/php_curl_devwilliam/retorna_data.php";
 
// Inicia a sessão cURL
$ch = curl_init();
 
// Informa a URL onde será enviada a requisição
curl_setopt( $ch, CURLOPT_URL, $url_data);
 
// Seta a requisição como sendo do tipo POST
curl_setopt ($ch, CURLOPT_POST, 1);
 
// Monta os parâmetros da requisição
$parametros = 'parametro=data';
 
// Seta os parâmetros para session cURL
curl_setopt ($ch, CURLOPT_POSTFIELDS, $parametros);
 
// Se true retorna o conteúdo em forma de string para uma variável
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
// Envia a requisição
$result = curl_exec($ch);
 
// Finaliza a sessão
curl_close($ch);
 
// Exibe o retorno da requisição
var_dump($result);
 
?>