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
      		  echo"Bem-Vindo, $login_cookie - Status logado<br><br>";      		   
      			
      				echo "Enviar arquivo Nfe - Compra (entrada):<br>";
      				echo "<form enctype='multipart/form-data' action='enviarArquivo.php' method='POST'>";
    			      //<!-- MAX_FILE_SIZE deve preceder o campo input -->"
    			      echo "<input type='hidden' name='MAX_FILE_SIZE' value='30000' />";
   			      //<!-- O Nome do elemento input determina o nome da array $_FILES -->
    			      echo "Enviar esse arquivo: <input name='userfile' type='file' />'";
    			      echo "<input type='submit' value='Enviar arquivo' />";
		            echo "</form>";
		            
		            echo "<br><br><br>";
		            
		            echo "Enviar arquivo Nfe - Venda (saída):<br>";
      				echo "<form enctype='multipart/form-data' action='enviarArquivo1.php' method='POST'>";
    			      //<!-- MAX_FILE_SIZE deve preceder o campo input -->"
    			      echo "<input type='hidden' name='MAX_FILE_SIZE' value='30000' />";
   			      //<!-- O Nome do elemento input determina o nome da array $_FILES -->
    			      echo "Enviar esse arquivo: <input name='userfile' type='file' />'";
    			      echo "<input type='submit' value='Enviar arquivo' />";
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
