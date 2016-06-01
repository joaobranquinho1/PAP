 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Web7</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</head>

<body>
  <div id="main">
    <div id="header">
	  <div id="banner">
	<img src="images/logoaps1.png" alt="" width="250" height="147" align='center'>
	<img src="images/logologo.png" alt="" width="650" height="45" align='right'></div>

	    </div><!--close welcome_slogan-->
	  </div><!--close banner-->
    </div><!--close header-->
<br></br><br></br>
	<div id="menubar">
          <ul id="menu">
<li class=""><a href="index2.php">Home </a></li>
<li><a href="registar.php">Utilizadores </a></li>
        <li><a href="listar_utilizadores.php">Listar Util.</a></li>
        <li><a href="produtos2.php">Comp. Infor.</a></li>
		 <li><a href="listar_produtos.php">Lista comp.</a></li>
		 	 <li><a href="listar_encomendas.php">Encomendas</a></li>
      </ul>
    </div><!--close menubar-->	
    
	 <div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            
			 
			<form action="logout.php" method="POST">
			 <h2>Logout&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input align="center" type="image" src="images/logout1.png" name="bot" value="Logout"></h2>
            		
					
				<?php
				session_start();
				$user=$_SESSION['user'];
				echo '<h3>Bem Vindo '.$user.'!</h3>';
				?>
	</br></form>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		   		
				
		
        <div class="sidebar">
          <div class="sidebar_item" >

				<h3>Eliminar Encomenda</h3>
				<FORM ACTION="eliminar_encomendas.php" METHOD="POST">
				<h4>Referência da Encomenda: <INPUT TYPE="TEXT" NAME="cod"></h4><br></br>
				<center>
				<INPUT  TYPE="SUBMIT" VALUE="Eliminar dados"></center>
				</FORM>
         

	
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	
         	 
	 
	  <div id="content">
        <div class="content_item">	
	
	<center><h2>Encomendas</h2></center>
				</tr></td>
				<ul class="searchsec">
                    <form action="pesquisar_clientes.php" method="POST" align="right"><h3>Pesquisar: <input type="text"  placeholder="Pesquisar" id="searchBox" name="aa" onblur="if(this.value == '') { this.value = 'Search'; }" onfocus="if(this.value == 'Search') { this.value = ''; }" class="bar" />&nbsp&nbsp<input type='image' height='15' width='15' src="images/lupa.png" alt="Submit Form"></h3> </form>
                    
                </ul>
				<tr><td>
					<?php
					
					$ligacao= mysqli_connect('localhost','root','') or die("Nao e possivel estabelecer a ligacao");
					mysqli_select_db($ligacao,'pap') or die ("Nao e possivel ligar a BD");
					$COMANDO = 'select * from carrinho_final order by sessao';
					$RESULTADO = MYSQLI_QUERY($ligacao, $COMANDO) OR DIE ('PESQUISA INVÁLIDA');
					$NUM_REGISTOS= MYSQLi_NUM_ROWS($RESULTADO);
					echo '<table><tr><td><h4>Código</h4></td><td></td><td><h4 align="center">Nome</h4></td><td></td><td><h4 align="center">Preço</h4></td><td></td><td><h4 align="center">Quantidade</h4></td><td></td><td><h4>Dados Cliente</h4></td><td></td>';
					WHILE ($REGISTO=MYSQLi_FETCH_ARRAY($RESULTADO)) {
					$cod=$REGISTO['cod'];
					$nome_carrinho_final=$REGISTO['nome'];
					$preco_carrinho_final=$REGISTO['preco'];
					$qtd_carrinho_final=$REGISTO['qtd'];
					$codcli=$REGISTO['codcliente'];
					
					$COMANDO2 = "select * from utilizadores Where idutilizadores like '".$codcli."'";
					$RESULTADO2 = MYSQLI_QUERY($ligacao, $COMANDO2) OR DIE ('PESQUISA INVÁLIDA');
					$REGISTO2=MYSQLi_FETCH_ARRAY($RESULTADO2);
					$nomecli=$REGISTO2['nome'];
					$morada=$REGISTO2['morada'];
					
					echo '<tr><td>'.$cod.'</td><td></td><td>'.$nome_carrinho_final.'</td><td></td><td>'.$preco_carrinho_final.'</td><td></td><td>'.$qtd_carrinho_final.'</td><td></td><td>'.$nomecli.'</td><td></td><td>'.$morada.'</td><td><br><br></td>';
					//echo "<br> <br>";
				}
					echo '</table>';
					
					
					?>
				
				
	<br></br>
	<br style="clear:both"/>
		<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
		<div id="content_grey">
	  <br>
	  <p> Telemóvel: 969367896 |E-mail: jgbranquinho@hotmail.com </p></br>
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	
      
	  </div><!--close content_grey_container_box1-->      
	 
    
 
  </div><!--close main-->
  </body>
</html>