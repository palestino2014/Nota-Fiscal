<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Notícias Dev Media</title>
</head>
<body>
<h1>Notícias Dev Media</h1>
<?php
    $link = "http://www.devmedia.com.br/xml/devmedia_full.xml"; //link do arquivo xml
    $xml = simplexml_load_file($link) -> channel; //carrega o arquivo XML e retornando um Array
     
    foreach($xml -> item as $item){ //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        echo "<strong>Título:</strong> ".utf8_decode($item -> title)."<br />";
        echo "<strong>Link:</strong> ".utf8_decode($item -> link)."<br />";
        echo "<strong>Descrição:</strong> ".utf8_decode($item -> description)."<br />";
        echo "<strong>Autor:</strong> ".utf8_decode($item -> author)."<br />";
        echo "<strong>Data:</strong> ".utf8_decode($item -> pubDate)."<br />";
        echo "<br />";
    } //fim do foreach
    
    try {
	    $object = simplexml_load_file($arquivo);
	    foreach($object->NFe as $key => $item) {	    	
	        if(isset($item->infNFe)) {	

	        	//LENDO AS INFORMA��ES DE PRODUTOS NA NF-e (XML)
	        	$semResultado = 0;
	        	for ($i=0; $i <=1000 ; $i++) { 
	        		if(!empty($item->infNFe->det[$i]->prod->cProd)){
	        			$semResultado = 0;
	        			echo "<br><br>Info do produto:";
	        			echo "<br>C�digo: ".$item->infNFe->det[$i]->prod->cProd;
	        			echo "<br>Nome: ".$item->infNFe->det[$i]->prod->xProd;
	        			echo "<br>NCM: ".$item->infNFe->det[$i]->prod->NCM;
	        			echo "<br>Valor: ".$item->infNFe->det[$i]->prod->vProd;
	        		} else {
	        			//CONTANDO QUANDO N�O HOUVER RESULTADOS
	        			$semResultado ++;
	        		}

	        		//SE N TIVER RESULTADOS EM SEQUENCIA, PARAR O FOR
	        		if($semResultado >= 10){
	        			break;
	        		}
	        	} // FIM DO FOR
	        	
	        }
	    }
	}
?>
</body>
</html>
