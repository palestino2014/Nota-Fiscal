<!DOCTYPE html>
<html>

		<head>
       <meta charset="UTF-8" http-equiv="Content-Style-Type" CONTENT="text/css"> 
       <link rel="stylesheet" type="text/css" href="estilo.css">				
				
               <style type="text/css">
            
               input[type="text"] {
               border: 1px solid #ddd;
               padding: 4px 8px;
                                  }            

               input[type="text"]:focus {
               border: 1px solid #000;
                                       }

               input[type="submit"] {
               font-weight: bold;
               padding: 4px 8px;
               border:1px solid #000;
               background: #3b5998;
               color:#fff;
                                    }

              form {
  width: 50%;
  margin: 0 auto;
}

              .p {
              padding-top: 30px;
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
       	    echo "Bem-Vindo, $login_cookie - Status logado<br><br>";  								      		
    			   	
      
      		echo "<center><p>RELATÓRIO POR CIDADE / ESTADO (Nfe-Compra) </p></center>";
            echo "<center>";
		      echo "<form action='busca1.php' method='POST' >";      
		      echo "<p>Data inicial:</p>";
		      echo "<input type='date' id='dataInicio' name='dataInicio' required='required'>";
		      echo "<p>Data final:</p>";
		      echo "<input type='date' id='dataFinal' name='dataFinal' required='required'>";
		      echo "<br><br>";
								
	   echo "<select name='estado'>"; 
		echo "<option value='estado'>Selecione o Estado</option>"; 
		echo "<option value='AC'>Acre</option>"; 
		echo "<option value='AL'>Alagoas</option>"; 
		echo "<option value='AM'>Amazonas</option>"; 
		echo "<option value='AP'>Amapá</option>"; 
		echo "<option value='BA'>Bahia</option>"; 
		echo "<option value='CE'>Ceará</option>"; 
		echo "<option value='DF'>Distrito Federal</option>"; 
		echo "<option value='ES'>Espírito Santo</option>"; 
		echo "<option value='GO'>Goiás</option>";
		echo "<option value='MA'>Maranhão</option>"; 
		echo "<option value='MT'>Mato Grosso</option>"; 
		echo "<option value='MS'>Mato Grosso do Sul</option>"; 
		echo "<option value='MG'>Minas Gerais</option>";
		echo "<option value='PA'>Pará</option>"; 
		echo "<option value='PB'>Paraíba</option>"; 
		echo "<option value='PR'>Paraná</option>"; 
		echo "<option value='PE'>Pernambuco</option>"; 
		echo "<option value='PI'>Piauí</option>"; 
		echo "<option value='RJ'>Rio de Janeiro</option>";
		echo "<option value='RN'>Rio Grande do Norte</option>"; 
		echo "<option value='RO'>Rondônia</option>"; 
		echo "<option value='RS'>Rio Grande do Sul</option>";
		echo "<option value='RR'>Roraima</option>"; 
		echo "<option value='SC'>Santa Catarina</option>"; 
		echo "<option value='SE'>Sergipe</option>"; 
		echo "<option value='SP'>São Paulo</option>"; 
		echo "<option value='TO'>Tocantins</option>";
	   echo "</select>";	
	    echo "<br><br>";		
		 echo "<input type='submit' />";	
		 	echo "<br>";
		   echo "</form>";
		   
		   echo "<br><br>";
		   
		   echo "<center><p>RELATÓRIO POR CIDADE / ESTADO (Nfe-Venda) </p></center>";
         echo "<center>";
		   echo "<form action='busca1_2.php' method='POST' >";      
		   echo "<p>Data inicial:</p>";
		   echo "<input type='date' id='dataInicio' name='dataInicio' required='required'>";
		   echo "<p>Data final:</p>";
		   echo "<input type='date' id='dataFinal' name='dataFinal' required='required'>";
		   echo "<br><br>";
								
	   echo "<select name='estado'>"; 
		echo "<option value='estado'>Selecione o Estado</option>"; 
		echo "<option value='AC'>Acre</option>"; 
		echo "<option value='AL'>Alagoas</option>"; 
		echo "<option value='AM'>Amazonas</option>"; 
		echo "<option value='AP'>Amapá</option>"; 
		echo "<option value='BA'>Bahia</option>"; 
		echo "<option value='CE'>Ceará</option>"; 
		echo "<option value='DF'>Distrito Federal</option>"; 
		echo "<option value='ES'>Espírito Santo</option>"; 
		echo "<option value='GO'>Goiás</option>";
		echo "<option value='MA'>Maranhão</option>"; 
		echo "<option value='MT'>Mato Grosso</option>"; 
		echo "<option value='MS'>Mato Grosso do Sul</option>"; 
		echo "<option value='MG'>Minas Gerais</option>";
		echo "<option value='PA'>Pará</option>"; 
		echo "<option value='PB'>Paraíba</option>"; 
		echo "<option value='PR'>Paraná</option>"; 
		echo "<option value='PE'>Pernambuco</option>"; 
		echo "<option value='PI'>Piauí</option>"; 
		echo "<option value='RJ'>Rio de Janeiro</option>";
		echo "<option value='RN'>Rio Grande do Norte</option>"; 
		echo "<option value='RO'>Rondônia</option>"; 
		echo "<option value='RS'>Rio Grande do Sul</option>";
		echo "<option value='RR'>Roraima</option>"; 
		echo "<option value='SC'>Santa Catarina</option>"; 
		echo "<option value='SE'>Sergipe</option>"; 
		echo "<option value='SP'>São Paulo</option>"; 
		echo "<option value='TO'>Tocantins</option>";
	   echo "</select>";	
	    echo "<br><br>";		
		 echo "<input type='submit' />";	
		 	echo "<br>";
		   echo "</form>";		
		
		
		   echo "<hr>";
		
	      echo "<br><br>";
		   echo "<center><p>RELATÓRIO POR PRODUTO E CUSTOS (NOME IDÊNTICO AO DA NOTA - EMINENTE)</p></center>";
			echo "<form action='busca2.php' method='POST' name='relatorioProdutos'>";     
		   echo "<p>Nome do produto:</p>";
			echo "<input type='text' id='descricao' required='required'  name='descricao' maxlength='90' onSubmit='return verifica()'>";
		   echo "<br>";
			echo "<input type='submit' />";
			echo "</form>";    		   
		   echo "<center/>";
		   
		   echo "<br><br>";
		   echo "<center><p>RELATÓRIO POR PRODUTO E CUSTOS (NOME IDÊNTICO AO DA NOTA - DESTINATÁRIO)</p></center>";
			echo "<form action='busca2_2.php' method='POST' name='relatorioProdutos'>";     
		   echo "<p>Nome do produto:</p>";
			echo "<input type='text' id='descricao' required='required'  name='descricao' maxlength='90' onSubmit='return verifica()'>";
		   echo "<br>";
			echo "<input type='submit' />";
			echo "</form>";    		   
		   echo "<center/>";
		   
			echo "<hr>";	   
		   echo "<br><br>";
		   
			echo "<center><p>RELATÓRIO NFE - EMINENTE </p></center>";			   		   
			echo "<form name='frmBusca' method='post' action='busca3.php' >";
    		echo "<input type='submit' value='Buscar' />";
         echo "</form>"; 	
         
			echo "<hr>";         
         echo "<br><br>";
         
         echo "<center><p>RELATÓRIO NFE - DESTINÁTARIO</p></center>";			   		   
			echo "<form name='frmBusca' method='post' action='busca4.php'>";
    		echo "<input type='submit'  value='Buscar' />";
         echo "</form>"; 	
         
         	}else{
      		   echo"Bem-Vindo, faça o login para acessar o sistema!<br>";
      			echo"Acesso restrito aos usuários do sistema";
      			echo"<br><a href='login.html'>Login</a>";
    				}    				
          ?>		    
   </center>	   
	</body>
	</html>
