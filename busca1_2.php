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
    				

	include ("conecta2.php"); 
 
	$dataInicio = $_POST["dataInicio"];	
   $dataFinal  = $_POST["dataFinal"];
   $estado     = $_POST["estado"];      
   
   $sql = "SELECT * FROM nfe  INNER JOIN emitente ON nfe.id_emitente = emitente.cnpj_cpf 
   where emissao >= '$dataInicio' and emissao <='$dataFinal' and UF='$estado' order by municipio";
   $resultado = mysql_query($sql, $conexao) or die ("Não foi possível realizar a consulta 1");			   
		  
		  echo "<p>Relatório custo por nota - Cidade e estado (Nfe venda)</p>";		  
		  echo "<table border='1px' cellpadding='5px' cellspacing='0' ID='alter'>
					<TR> <TH>EMINENTE</TH> 
					<TH>DATA EMISSÃO</TH> 
					<TH>NATUREZA</TH> 
					<TH>VALOR TOTAL</TH> 
					<TH>ICMS</TH>
					<TH>IPI</TH> 
					<TH>PIS</TH> 	 				
					<TH>COFINS</TH>
					<TH>IMPOSTO TOTAL</TH>
					<TH>VALOR SEM IMPOSTO</TH>
					<TH>MUNICÍPIO</TH>
					<TH>UF</TH>									
					
					";

						while ($linha = mysql_fetch_array($resultado))
						{
								$nome       = $linha["nome"];
								$emissao    = $linha["emissao"];
								$natureza   = $linha["natureza"];
								$vlr_total  = $linha["vlr_total"];
								$vlr_icms   = $linha["vlr_icms"];
								$vlr_ipi    = $linha["vlr_ipi"];
								$vlr_pis    = $linha["vlr_pis"];
								$vlr_cofins = $linha["vlr_cofins"];								
								$municipio  = $linha["municipio"];
								$uf         = $linha["uf"];
								$imp_total  = $linha["vlr_icms"]+$linha["vlr_ipi"]+$linha["vlr_pis"]+$linha["vlr_cofins"];
								$sem_impos  = $vlr_total-$imp_total;
														
						echo "<TR>	
	 						   <TD>$nome</TD>
	 						   <TD>$emissao </TD>
	 						   <TD>$natureza </TD>	 						   
							   <TD>$vlr_total</TD>
							   <TD>$vlr_icms</TD>
							   <TD>$vlr_ipi</TD>
								<TD>$vlr_pis</TD>
								<TD>$vlr_cofins</TD>								
								<TD>$imp_total</TD>
								<TD>$sem_impos</TD>	
								<TD>$municipio</TD>
								<TD>$uf</TD>							
						
							  ";
							}						
						echo "</TABLE>"; 
						mysql_free_result($resultado);
						 	
						echo "<br><br>";
						
						$sql1 = "SELECT sum(vlr_total),sum(vlr_icms),sum(vlr_ipi),sum(vlr_pis),sum(vlr_cofins)
					   FROM nfe  INNER JOIN emitente ON nfe.id_emitente = emitente.cnpj_cpf 
                  where emissao >= '$dataInicio' and emissao <='$dataFinal' and UF='$estado' order by municipio";   				
 
     					$resultado1 = mysql_query($sql1, $conexao) or die ("Não foi possível realizar a consulta 2");
 						
 						 echo "<table border='1px' cellpadding='5px' cellspacing='0' ID='alter'>
					     <TR> <TH>Soma do valor total</TH>
					          <TH>Soma do ICMS</TH>  
								 <TH>Soma do IPI</TH>
								 <TH>Soma do PIS</TH>
								 <TH>Soma do COFINS</TH>
								 <TH>Soma Imposto Total</TH>
								 <TH>Soma Valor Total - Valor Total Imposto</TH>					
					      ";

						while ($linha = mysql_fetch_array($resultado1))
						{
																
								$vlr_total  = $linha["sum(vlr_total)"];
								$vlr_icms   = $linha["sum(vlr_icms)"];
								$vlr_ipi    = $linha["sum(vlr_ipi)"];
								$vlr_pis    = $linha["sum(vlr_pis)"];
								$vlr_cofins = $linha["sum(vlr_cofins)"];
								$total_sum_imp = $vlr_icms+$vlr_ipi+$vlr_pis+$vlr_cofins;
								$valor_tot_s_imp=$vlr_total-$total_sum_imp;
											
						echo "<TR>	
	 						   <TD>$vlr_total</TD> 
	 						   <TD>$vlr_icms</TD> 				   				
						      <TD>$vlr_ipi</TD>
						      <TD>$vlr_pis</TD>
						      <TD>$vlr_cofins</TD> 
						      <TD>$total_sum_imp</TD> 
						      <TD>$valor_tot_s_imp</TD> 
						       
							  ";
							}						
						echo "</TABLE>";  						
 						mysql_free_result($resultado1);
 						
 					$sql2 = "SELECT * FROM nfe  INNER JOIN destinatario ON nfe.id_destinatario = destinatario.cnpj_cpf 
               where emissao >= '$dataInicio' and emissao <='$dataFinal' and UF='$estado' order by municipio";	
 					$resultado2 = mysql_query($sql2, $conexao);	
 					
 					echo "<p>Relatório custo por nota - Cidade e estado</p>";		  
		         echo "<table border='1px' cellpadding='5px' cellspacing='0' ID='alter'>
					<TR> <TH>DESTINÁTARIO</TH> 
					<TH>DATA EMISSÃO</TH> 
					<TH>NATUREZA</TH> 
					<TH>VALOR TOTAL</TH> 
					<TH>ICMS</TH>
					<TH>IPI</TH> 
					<TH>PIS</TH> 	 				
					<TH>COFINS</TH>
					<TH>IMPOSTO TOTAL</TH>
					<TH>VALOR SEM IMPOSTO</TH>
					<TH>MUNICÍPIO</TH>
					<TH>UF</TH>									
					
					";

						while ($linha = mysql_fetch_array($resultado2))
						{
								$nome       = $linha["nome"];
								$emissao    = $linha["emissao"];
								$natureza   = $linha["natureza"];
								$vlr_total  = $linha["vlr_total"];
								$vlr_icms   = $linha["vlr_icms"];
								$vlr_ipi    = $linha["vlr_ipi"];
								$vlr_pis    = $linha["vlr_pis"];
								$vlr_cofins = $linha["vlr_cofins"];								
								$municipio  = $linha["municipio"];
								$uf         = $linha["uf"];
								$imp_total  = $linha["vlr_icms"]+$linha["vlr_ipi"]+$linha["vlr_pis"]+$linha["vlr_cofins"];
								$sem_impos  = $vlr_total-$imp_total;
														
						echo "<TR>	
	 						   <TD>$nome</TD>
	 						   <TD>$emissao </TD>
	 						   <TD>$natureza </TD>	 						   
							   <TD>$vlr_total</TD>
							   <TD>$vlr_icms</TD>
							   <TD>$vlr_ipi</TD>
								<TD>$vlr_pis</TD>
								<TD>$vlr_cofins</TD>								
								<TD>$imp_total</TD>
								<TD>$sem_impos</TD>	
								<TD>$municipio</TD>
								<TD>$uf</TD>							
						
							  ";
							}						
						echo "</TABLE>"; 
						mysql_free_result($resultado2);
						
						echo "<br>";
 					
					   $sql3 = "SELECT sum(vlr_total),sum(vlr_icms),sum(vlr_ipi),sum(vlr_pis),sum(vlr_cofins)
					   FROM nfe  INNER JOIN destinatario ON nfe.id_destinatario = destinatario.cnpj_cpf 
                  where emissao >= '$dataInicio' and emissao <='$dataFinal' and UF='$estado' order by municipio";   				
 
     					$resultado3 = mysql_query($sql3, $conexao) or die ("Não foi possível realizar a consulta 2");
 						
 						 echo "<table border='1px' cellpadding='5px' cellspacing='0' ID='alter'>
					     <TR> <TH>Soma do valor total</TH>
					          <TH>Soma do ICMS</TH>  
								 <TH>Soma do IPI</TH>
								 <TH>Soma do PIS</TH>
								 <TH>Soma do COFINS</TH>
								 <TH>Soma Imposto Total</TH>
								 <TH>Soma Valor Total - Valor Total Imposto</TH>				
					      ";

						while ($linha = mysql_fetch_array($resultado3))
						{
																
								$vlr_total  = $linha["sum(vlr_total)"];
								$vlr_icms   = $linha["sum(vlr_icms)"];
								$vlr_ipi    = $linha["sum(vlr_ipi)"];
								$vlr_pis    = $linha["sum(vlr_pis)"];
								$vlr_cofins = $linha["sum(vlr_cofins)"];
								$total_sum_imp = $vlr_icms+$vlr_ipi+$vlr_pis+$vlr_cofins;
								$valor_tot_s_imp=$vlr_total-$total_sum_imp;
											
						echo "<TR>	
	 						   <TD>$vlr_total</TD> 
	 						   <TD>$vlr_icms</TD> 				   				
						      <TD>$vlr_ipi</TD>
						      <TD>$vlr_pis</TD>
						      <TD>$vlr_cofins</TD> 
						      <TD>$total_sum_imp</TD> 
						      <TD>$valor_tot_s_imp</TD> 
						       
							  ";
							}						
						echo "</TABLE>";  						
 						mysql_free_result($resultado3);						 						
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
	
