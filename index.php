<!DOCTYPE html>
<html>

		<head>
       <meta charset="UTF-8" http-equiv="Content-Style-Type" content="text/css"> 
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
		
		     <?php
            $login_cookie = $_COOKIE['login'];
       	    if(isset($login_cookie)){
      		   echo"Bem-Vindo, $login_cookie - Status logado<br><br>";     		  
      								      		
    			   	}else{
      		   echo"Bem-Vindo, faça o login para acessar o sistema!<br>";
      			echo"Acesso restrito aos usuários do sistema";
      			echo"<br><a href='login.html'>Login</a>";
    				}
    				
?>		
		     </center> 
	</body>
	</html>
