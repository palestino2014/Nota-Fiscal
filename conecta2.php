<?php 

$usuario = "rodabras2";
$senha = "buda36581259";
$host = "rodabras2.mysql.dbaas.com.br";
//$selecionabd = "bancoarduino";

$conexao = mysql_connect($host,$usuario,$senha);
$selecionabd = mysql_select_db('rodabras2',$conexao);

	
	/*if($conexao)
		{
			echo "Conectou com sucesso";
		} else {
			echo "Ocorreu um erro";
			} */

?>
