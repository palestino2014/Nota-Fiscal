<!DOCTYPE html>
<html>

		<head>
       <meta charset="UTF-8" http-equiv="Content-Style-Type" CONTENT="text/css"> 
       <link rel="stylesheet" type="text/css" href="estilo.css">
       
       <style type="text/css">
		
			table#alter tr td { 
	      background: #D3D3D3;	      
	      
	      } 	
		</style>   	
      </head>

		<body>
		<title>Dinâmica</title>
			
		<center>
		<p><a href="index.php"><img src="imagens/logo.png"></a></p>			
	   <p><a href="index.php"><img src="imagens/home.png" alt="home"></a>
		<a href="notaFiscal.php"><img src="imagens/notaFiscal.png" alt="nota"></a>
		<a href="envioPython.php"><img src="imagens/enviar.png" alt="enviar"></a>
		<a href="relatorio.php"><img src="imagens/relatorio.png" alt="relatorio"></a></p>
	 
 
 <?php
 
   $login_cookie = $_COOKIE['login'];
       	    if(isset($login_cookie)){
      		   echo"Bem-Vindo, $login_cookie - Status logado<br><br>";         								      		
    			   	

	include ("conecta.php"); 
 
	$descricao = $_POST["descricao"];		
   echo "<br>";
   
   $sql1 = "SELECT * FROM produto WHERE descricao = '$descricao' ";  
	$resultado1 = mysql_query($sql1, $conexao) or die ("Não foi possível realizar a consulta");
	
	//$sql = "SELECT * FROM nfe  INNER JOIN emitente ON nfe.id_emitente = emitente.cnpj_cpf 
   //where emissao >= '$dataInicio' and emissao <='$dataFinal' and UF='$estado' order by municipio";
	
		 		  
					echo "<p>Relatório de produto</p>";		 		   
		 		   echo "<table border='1px' cellpadding='5px' cellspacing='0' ID='alter'>
					 <TR> <TH>PRODUTO</TH> 
					 <TH>QUANTIDADE</TH>
					 <TH>V. UNITÁRIO</TH>
					 <TH>V. TOTAL</TH>
					 <TH>V. ICMS</TH>
					 <TH>V. IPI</TH>
					 <TH>V. PIS</TH>
					 <TH>V. COFINS</TH>
					 <TH>V. IMPOSTO TOTAL</TH>
					 <TH>V. IMPOSTO UNITÁRIO</TH>
					 <TH>V. V. Uni. S/ IMPOSTO</TH>						 
					  					
					 ";
		 		  
		 		  	while ($linha1 = mysql_fetch_array($resultado1))
						{
								$descricao     = $linha1["descricao"];
							   $quantidade    = $linha1["quantidade"];
							   $vlr_unit      = $linha1["vlr_unit"];
							   $vlr_total     = $linha1["vlr_total"];
							   $vlr_icms      = $linha1["vlr_icms"];
							   $vlr_ipi       = $linha1["vlr_ipi"];
							   $vlr_pis       = $linha1["vlr_pis"];
							   $vlr_cofins    = $linha1["vlr_cofins"];
							   $imposto_total = $linha1["vlr_cofins"]+$linha1["vlr_cofins"]+$linha1["vlr_pis"]+$linha1["vlr_ipi"]+$linha1["vlr_icms"];
								$imposto_unit  = $imposto_total/$quantidade;								
								$vlr_sem_imp   = $vlr_unit - ($imposto_total/$quantidade);	
								
								
						echo "<TR>								
	 						   <TD>$descricao</TD>	 
	 						   <TD>$quantidade</TD>
	 						   <TD>$vlr_unit</TD>
	 						   <TD>$vlr_total</TD>
	 						   <TD>$vlr_icms</TD>	 
	 						   <TD>$vlr_ipi</TD>
	 						   <TD>$vlr_pis</TD>
	 						   <TD>$vlr_cofins</TD>
	 						   <TD>$imposto_total</TD>
	 						   <TD>$imposto_unit</TD>
	 						   <TD>$vlr_sem_imp</TD>
	 						   						    
							  ";							  
						echo "<br>";
							}						
						echo "</TABLE>"; 					 
	    
		 mysql_free_result($resultado1);	    
		 mysql_close($conexao); 
       
			      }else{
      		   	echo"Bem-Vindo, faça o login para acessar o sistema!<br>";
      				echo"Acesso restrito aos usuários do sistema";
      				echo"<br><a href='login.html'>Login</a>";
    				}       
       	
      ?>	
      </center>	
		</body>
		</html>
	
