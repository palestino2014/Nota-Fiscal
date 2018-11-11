<?php 

$usuario = "";
$senha = "";
$host = "";
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
