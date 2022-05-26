<?php 
 
// Recebe o parâmetro via POST
$parametro = (isset($_POST['parametro'])) ? $_POST['parametro'] : '';
 
// Verifica se o parâmetro não está vazio e se o valor é igual a 'data'
if(!empty($parametro) && $parametro == 'data'):
	$retorno = array('data' => date('d-m-Y'));
	echo json_encode($retorno);
endif;

?>