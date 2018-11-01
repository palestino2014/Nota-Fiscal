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
		
		<p>RELATÓRIO NFE - EMINENTE</p>
		
		<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">
    	<input type="text" name="palavra" maxlength="120" required="required" />
    	<br>
    	<input type="submit" value="Buscar" />
      </form>	

<?php     

		       $login_cookie = $_COOKIE['login'];
       	    if(isset($login_cookie)){
      		 echo"Bem-Vindo, $login_cookie - Status logado<br><br>"; 	 
		   
		 include ("conecta.php");		
		  
	    //Conexão com o banco de dados
       $conn = @mysql_connect("rodabras.mysql.dbaas.com.br", "rodabras", "buda36581259") or die("Não foi possível a conexão com o Banco");
       // Selecionando banco
		 // $db = @mysql_select_db("rodabras", $conn) or die("Não foi possível selecionar o Banco");
 
       // Recuperamos a ação enviada pelo formulário
       $a = $_GET['a'];
 
       // Verificamos se a ação é de busca
       if ($a == "buscar") {
 
	    // Pegamos a palavra
	    $palavra = trim($_POST['palavra']);
 
	    // Verificamos no banco de dados produtos equivalente a palavra digitada
	    // $sql = mysql_query("SELECT * FROM produtos WHERE nome LIKE '%".$palavra."%' ORDER BY nome");
	    
	    $sql3 = mysql_query("SELECT * FROM nfe INNER JOIN emitente ON nfe.id_emitente = emitente.cnpj_cpf WHERE nome LIKE '%".$palavra."%' ORDER BY emissao");
		  		
 
	    // Descobrimos o total de registros encontrados
	    $numRegistros = mysql_num_rows($sql3);
 
	    // Se houver pelo menos um registro, exibe-o
	    if ($numRegistros != 0) {
		// Exibe os produtos e seus respectivos preços
		   while ($produto = mysql_fetch_object($sql3)) {
			echo "Eminente: ".$produto->nome."<br />";
			echo "Cidade: ".$produto->municipio."<br />";
			echo "UF: ".$produto->uf."<br />";
			echo "Valor Total: ".$produto->vlr_total."<br />";
			echo "Emissão : ".$produto->emissao."<br />";
			echo "Natureza : ".$produto->natureza."<br />";
		   echo "<hr>";
		}
		
	   	} else {
					echo "<br>";
					echo "Nenhum registro foi encontrado com a palavra ".$palavra."";}
  			}
  
  				}else{
      		   echo"Bem-Vindo, faça o login para acessar o sistema!<br>";
      			echo"Acesso restrito aos usuários do sistema";
      			echo"<br><a href='login.html'>Login</a>";
    				} 	  
		?>        
            </center>
            	
		</body>
		</html>  
