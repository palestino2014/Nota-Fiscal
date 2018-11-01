<?php 

$usuario = "rodabras";
$senha = "buda36581259";
$host = "rodabras.mysql.dbaas.com.br";
//$selecionabd = "bancoarduino";

$conexao = mysql_connect($host,$usuario,$senha);
$selecionabd = mysql_select_db('rodabras',$conexao);

	
	/*if($conexao)
		{
			echo "Conectou com sucesso";
		} else {
			echo "Ocorreu um erro";
			} */

?>
