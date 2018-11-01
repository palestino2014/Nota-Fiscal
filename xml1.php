try {
	    		$object = simplexml_load_file('arq/nfe1.xml');
	    		foreach($object->NFe as $key => $item) {	    	
	        	if(isset($item->infNFe)) {	

	        	//busca as informacoer no arquivo xml
	        		$semResultado = 0;
	        		for ($i=0; $i <=1000 ; $i++) { 
	        			if(!empty($item->infNFe->det[$i]->prod->cProd)){
	        				$semResultado = 0;
	        					echo "<br><br>Info do produto:";
	        					echo "<br>Código: ".$item->infNFe->det[$i]->prod->cProd;
	        					echo "<br>Nome: ".$item->infNFe->det[$i]->prod->xProd;
	        					echo "<br>NCM: ".$item->infNFe->det[$i]->prod->NCM;
	        					echo "<br>Valor: ".$item->infNFe->det[$i]->prod->vProd;
	        					
	        					
	        			} else {
	        			// inicia a iteracao
	        			$semResultado ++;
	        			}

	        			//testa de iteracoes e para o laço for
	        			if($semResultado >= 10){
	        			break;
	        				}
	        			} // final do laço for
	        	
	        					}
	    					}
						} catch (Exception $e) {
    					echo 'Exceção capturada: ',  $e->getMessage(), "\n";
					}
    			
