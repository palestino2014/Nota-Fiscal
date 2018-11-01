<!DOCTYPE html>
<html>

		<head>
       <meta charset="UTF-8" http-equiv="Content-Style-Type" CONTENT="text/css"> 
       <link rel="stylesheet" type="text/css" href="estilo.css">	
      </head>

		<body>
		<title>Dinâmica</title>
			
		<center>
				<p><a href="index.php"><img src="imagens/logo.png"></a></p>			
	   		<p><a href="index.php"><img src="imagens/home.png" alt="home"></a>
				<a href="notaFiscal.php"><img src="imagens/notaFiscal.png" alt="nota"></a>
				<a href="envioPython.php"><img src="imagens/enviar.png" alt="enviar"></a>
				<a href="relatorio.php"><img src="imagens/relatorio.png" alt="relatorio"></a></p>
		</center>
		<center> 
		
         <?php
            $login_cookie = $_COOKIE['login'];
       	    if(isset($login_cookie)){
      		   echo"Bem-Vindo, $login_cookie - Status logado<br><br>"; 
      		        			
      			 include ("conecta.php"); //efetua conexao com o banco de dados
		          shell_exec("banco.sh");	 	
		   
		   //system("usr/bin/python3 xml_extracter.py");
							
						//verifica se arquivo existe
            		/*	if (file_exists('arq/13.xml')) 
            			{
    					   $xml1 = simplexml_load_file('arq/13.xml'); // carrega o XML em um objeto na caminho especificado
    					
					} else {
    				//		exit('Falha ao abrir xml.');
					}
									
				//obtencao dos dados do arquivo XML			     					
      		$cUF = $xml1 -> NFe -> infNFe -> ide -> cUF;      	
      		$cUF1 = $cUF;			
				$cNF = $xml1 -> NFe -> infNFe -> ide -> cNF;      	
      		$cNF1 = $cNF;						
				$natOp = $xml1 -> NFe -> infNFe -> ide -> natOp;      		
      		$natOp1 = $natOp;      
      		$indPag = $xml1 -> NFe -> infNFe -> ide -> indPag;       
				$indPag1 = $indPag;		
				$mod1 = $xml1 -> NFe -> infNFe -> ide -> mod;      	
				$mod2 = $mod1;			    		
      		$serie = $xml1 -> NFe -> infNFe -> ide -> serie;      	
      		$serie1 = $serie;      		  		
      		$nNF = $xml1 -> NFe -> infNFe -> ide -> nNF;      		
      		$nNF1 = $nNF;      	
				$dhEmi = $xml1 -> NFe -> infNFe -> ide -> dhEmi;      
				$dhEmi1 = $dhEmi;       		
      	   $tpNF = $xml1 -> NFe -> infNFe -> ide -> tpNF;      
				$tpNF1 = $tpNF;			
				$idDest = $xml1 -> NFe -> infNFe -> ide -> idDest;      	
      		$idDest1 = $idDest;      	
      		$cMunFG = $xml1 -> NFe -> infNFe -> ide -> cMunFG;      	
				$cMunFG1 = $cMunFG;				
				$tpImp = $xml1 -> NFe -> infNFe -> ide -> tpImp;      	
      		$tpImp1 = $tpImp;      	
      		$tpEmis = $xml1 -> NFe -> infNFe -> ide -> tpEmis;     
				$tpEmis1 = $tpEmis;			
				$cDV = $xml1 -> NFe -> infNFe -> ide -> cDV;      	
				$cDV1 = $cDV;			
				$tpAmbide = $xml1 -> NFe -> infNFe -> ide -> tpAmb;      		
				$tpAmbide1 = $tpAmbide;			
				$finNFe = $xml1 -> NFe -> infNFe -> ide -> finNFe;      	
				$finNFe1 = $finNFe;			
				$indFinal = $xml1 -> NFe -> infNFe -> ide -> indFinal;      	
      		$indFinal1 = $indFinal;      	
				$indPres = $xml1 -> NFe -> infNFe -> ide -> indPres;      	
				$indPres1 = $indPres;				
				$procEmi = $xml1 -> NFe -> infNFe -> ide -> procEmi;      		
			   $procEmi1 = $procEmi;			
				$verProc = $xml1 -> NFe -> infNFe -> ide -> verProc;      	 
      		$verProc1 = $verProc;       		
      		$CNPJEmit = $xml1 -> NFe -> infNFe -> emit -> CNPJ;      		
				$CNPJEmit1 = $CNPJEmit;   				 
      		$xNomeEmit = $xml1 -> NFe -> infNFe -> emit -> xNome;      		
      		$xNomeEmit1 = $xNomeEmit;				
				$xFantEmit = $xml1 -> NFe -> infNFe -> emit -> xFant;      	
      		$xFantEmit1 = $xFantEmit;      		
				$xLgrenderEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> xLgr;      		
      		$xLgrenderEmit1 = $xLgrenderEmit;      		
				$nroEnderEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> nro;      		
				$nroEnderEmit1 = $nroEnderEmit;     	
				$xCpl = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> xCpl;      
				$xCpl1 = $xCpl;				
				$xBairroEnderEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> xBairro;      	
				$xBairroEnderEmit1 = $xBairroEnderEmit;					
				$cMunEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> cMun;     
				$cMunEmit1 = $cMunEmit;	
				$xMunEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> xMun;      	
				$xMunEmit1 = $xMunEmit;		
				$UFEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> UF;			
				$UFEmit1 = $UFEmit;			
				$CEPEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> CEP;			
      		$CEPEmit1 = $CEPEmit;      					
				$cPaisEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> cPais;      			
				$cPaisEmit1 = $cPaisEmit;			 				
				$xPaisEmit = $xml1 -> NFe -> infNFe -> emit -> enderEmit -> xPais;
      		$xPaisEmit1 = $xPaisEmit;				
				$IEEmit = $xml1 -> NFe -> infNFe -> emit -> IE;      				
				$IEEmit1 = $IEEmit;							
				$CrtEmit = $xml1 -> NFe -> infNFe -> emit -> CRT;      	
      		$CrtEmit1 = $CrtEmit;
				$CPFDest = $xml1 -> NFe -> infNFe -> dest -> CPF;		
				$CPFDest1 = $CPFDest;		
				$xNomeDest = $xml1 -> NFe -> infNFe -> dest -> xNome;      	
				$xNomeDest1 = $xNomeDest;
				$xLgrDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> xLgr ;      	
				$xLgrDest1 = $xLgrDest;				
				$nroDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> nro ;      	
				$nroDest1 = $nroDest;
      		$xBairroDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> xBairro ;	
				$xBairroDest1 = $xBairroDest;					
      		$cMunDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> cMun ;
      		$cMunDest1 = $cMunDest;	
				$xMunDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> xMun ;
      		$xMunDest1 = $xMunDest; 
				$UFDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> UF ;
      		$UFDest1 = $UFDest;
				$CEPDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> CEP ;
      		$CEPDest1 = $CEPDest;					
				$cPaisDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> cPais ;      		    	
      		$cPaisDest1 = $cPaisDest;     		
      		$xPaisDest = $xml1 -> NFe -> infNFe -> dest -> enderDest -> xPais ;      	     	
      		$xPaisDest1 = $xPaisDest;	
				$indIEDest  = $xml1 -> NFe -> infNFe -> dest -> indIEDest  ;      	
				$indIEDest1 = $indIEDest;				
				$cProdDet   = $xml1 -> NFe -> infNFe -> det -> prod -> cProd  ;					
				$vBCicmstot   = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vBC ;
      		$vBCicmstot1 = $vBCicmstot;     		
				$vICMSicmstot   = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vICMS ;
      		$vICMSicmstot1 = $vICMSicmstot;
				$vICMSDeson   = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vICMSDeson ;
      		$vICMSDeson1 = $vICMSDeson;
				$vFCPtot = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vFCP ;
      		$vFCP1 = $vFCPtot;
				$vBCSTtot   = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vBCST ;
      		$vBCSTtot1 = $vBCSTtot;
      		$vSTtot  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vST ;
      		$vSTtot1 = $vSTtot;
				$vFCPSTtot  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vFCPST ;
      		$vFCPSTtot1 = $vFCPSTtot;				
				$vFCPSTRet  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vFCPSTRet ;
      		$vFCPSTRet1 = $vFCPSTRet;				
				$vProdTot  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vProd ;
      		$vProdTot1 = $vProdTot;				
				$vFreteTot  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vFrete ;
      		$vFreteTot1 = $vFreteTot;				
				$vSegTot  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vSeg ;
      		$vSegTot1 = $vSegTot;				
				$vDescTot  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vDesc ;
      		$vDescTot1 = $vDescTot;
				$vIPITot  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vIPI ;
      		$vIPITot1 = $vIPITot;
				$vIPIDevol  = $xml1 -> NFe -> infNFe -> total -> ICMSTot ->vIPIDevol ;
      		$vIPIDevol1 = $vIPIDevol;
				$vPIS  = $xml1 -> NFe -> infNFe -> total -> ICMSTot ->vPIS ;
      		$vPIS1 = $vPIS;
				$vCOFINS  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vCOFINS ;
      		$vCOFINS1 = $vCOFINS;
				$vOutro  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vOutro ;
      		$vOutro1 = $vOutro;
				$vNF  = $xml1 -> NFe -> infNFe -> total -> ICMSTot -> vNF ;      		
				$vNF1 = $vNF;							
				$chNFe  = $xml1 -> protNFe -> infProt -> chNFe ;      		 		
      		$chNFe1 = $chNFe;      		 
	     
			//verifica se a nota fiscal ja existe no banco de dados	
			
			$verifica = mysql_query("SELECT * FROM teste WHERE chNFe = '$chNFe1'");
				if(@mysql_num_rows($verifica) > 0){
    				echo '
        				<script type="text/javascript">
             			alert("Nota fiscal já existe no banco de dados!"); 
        				</script>';
				}else{		
			
			//comando SQL - Envio de dados ao banco de dados        
			$sql_insert1 = "insert into teste (cUF,cNF,natOp,indPag,mod1,serie,dhEmi,tpNF,idDest,tpImp,tpEmis,cDV,
			tpAmbide,finNFe,indFinal,indPres,procEmi,verProc,CNPJEmit,xNomeEmit,xFantEmit,xLgrenderEmit,nroEnderEmit,
			xBairroEnderEmit,cMunEmit,xMunEmit,UFEmit,CEPEmit,cPaisEmit,xPaisEmit,IEEmit,CrtEmit,CPFDest,xNomeDest,
			xLgrDest,nroDest,xBairroDest,cMunDest,xMunDest,UFDest,CEPDest,cPaisDest,xPaisDest,indIEDest,vBCicmstot,
			vICMSicmstot,vICMSDeson,vFCPtot,vBCSTtot,vSTtot,vFCPSTtot,vFCPSTRet,vProdTot,vFreteTot,vSegTot,vDescTot,
			vIPITot,vIPIDevol,vPIS,vCOFINS,vOutro,vNF,chNFe) 
			
			values 
			
			('$cUF1','$cNF1','$natOp1','$indPag1','$mod2','$serie1','$dhEmi1','$tpNF1','$idDest1','$tpImp1','$tpEmis1','$cDV1',
			'$tpAmbide1','$finNFe1','$indFinal1','$indPres1','$procEmi1','$verProc1','$CNPJEmit1','$xNomeEmit1','$xFantEmit1',
			'$xLgrenderEmit1','$nroEnderEmit1','$xBairroEnderEmit1','$cMunEmit1','$xMunEmit1','$UFEmit1','$CEPEmit','$cPaisEmit',
			'$xPaisEmit1','$IEEmit1','$CrtEmit1','$CPFDest1','$xNomeDest1','$xLgrDest1','$nroDest1','$xBairroDest1','$cMunDest',
			'$xMunDest1','$UFDest1','$CEPDest1','$cPaisDest1','$xPaisDest1','$indIEDest1','$vBCicmstot1','$vICMSicmstot1','$vICMSDeson1',
			'$vFCP1','$vBCSTtot','$vSTtot1','$vFCPSTtot1','$vFCPSTRet1','$vProdTot1','$vFreteTot1','$vSegTot1','$vDescTot1',
			'$vIPITot1','$vIPIDevol1','$vPIS1','$vCOFINS1','$vOutro1','$vNF1','$chNFe1')";      

	      //verifica se a insercao de dados no banco de dados ocorreu com sucesso     
	      mysql_query($sql_insert1);

		       if($sql_insert1) 
			      {
			         echo "<br>";	
			         echo "Salvo com sucesso";
			      } else { 
		       echo "Ocorreu um erro";
	            }				
						
				// envio dos produtos ao banco de dados 
				try {
	    		$object = simplexml_load_file('arq/13.xml');
	    		foreach($object->NFe as $key => $item) {	    	
	        	if(isset($item->infNFe)) {	

	        	//busca as informacoes no arquivo xml
	        		$semResultado = 0;
	        		for ($i=0; $i <=1000 ; $i++) { 
	        			if(!empty($item->infNFe->det[$i]->prod->cProd)){
	        				$semResultado = 0;
	        				
	        					$cProDet = $item->infNFe->det[$i]->prod->cProd;        					
	        					$xProdDet = $item->infNFe->det[$i]->prod->xProd;	        					
	        					$NCM = $item->infNFe->det[$i]->prod->NCM;	        			
	        					$CFOPDet = $item->infNFe->det[$i]->prod->CFOP;	        					
	        					$uComDet = $item->infNFe->det[$i]->prod->uCom;	        					
	        					$qComDet = $item->infNFe->det[$i]->prod->qCom;						
	        					$vUnComDet = $item->infNFe->det[$i]->prod->vUnCom;         				
	        					$vProdDet = $item->infNFe->det[$i]->prod->vProd;		        				
	        					$uTribDet = $item->infNFe->det[$i]->prod->uTrib;	        				
	        					$qTribDet = $item->infNFe->det[$i]->prod->qTrib;         					
	        					$vUnTribDet = $item->infNFe->det[$i]->prod->vUnTrib;         					
	        					$indTotDet = $item->infNFe->det[$i]->prod->indTot;   					   
	        					
	        					$sql_insert2 = "insert into testeProduto (cProDet,xProdDet,NCM,CFOPDet,uComDet,qComDet,vUnComDet,
	        					vProdDet,uTribDet,qTribDet,vUnTribDet,indTotDet,chNFe) 
	        							
			               	values 
			               			
			              ('$cProDet','$xProdDet','$NCM','$CFOPDet','$uComDet','$qComDet','$vUnComDet','$vProdDet',
			              '$uTribDet','$qTribDet','$vUnTribDet','$indTotDet','$chNFe1')";      

	      //verifica se a insercao de dados no banco de dados ocorreu com sucesso     
	      mysql_query($sql_insert2);

		       if($sql_insert2) 
			      {
			         echo "<br>";	
			         echo "Produtos enviados com sucesso";
			      } else { 
		       			echo "Ocorreu um erro";
		                }     					
	        					
	        			} else {
	        			// inicio da iteracao
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
    			}
    			echo "<hr>";
    			
    				*/	
    									
				//visualizar arquivos do diretorio   
				   		
				$path = "nfe/";
				$diretorio = dir($path);
 
				echo "Listagem das Nfe de entrada<br>";
					while($arquivo = $diretorio -> read())
						{
							echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br/>";
						}						
				echo "<br>";
     			$diretorio -> close(); 	
     			
     			echo "<hr><br>";		
				
      		$path1 = "nfe1/";
				$diretorio1 = dir($path1);
 
				echo "Listagem das Nfe de saída<br>";
					while($arquivo1 = $diretorio1 -> read())
						{
							echo "<a href='".$path1.$arquivo1."'>".$arquivo1."</a><br/>";
						}						
				echo "<br>";
     			$diretorio1 -> close(); 	
					      		
    			   	}else{
      		   echo"Bem-Vindo, faça o login para acessar o sistema!<br>";
      			echo"Acesso restrito aos usuários do sistema";
      			echo"<br><a href='login.html'>Login</a>";
    				}
    				
?>			
		
		   </center>
	</body>
	</html>
