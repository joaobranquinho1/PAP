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
		  <br></br>
				<h3>Eliminar Produto</h3>
				<FORM ACTION="eliminar_produtos.php" METHOD="POST">
				<h4>Referência do Produto: <INPUT TYPE="TEXT" NAME="cod"></h4><br></br>
				<center>
				<INPUT  TYPE="SUBMIT" VALUE="Eliminar dados"></center>
				</FORM>
		   
         
		 
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	
         	 
	 
	  <div id="content">
        <div class="content_item">	
	
	<center><h2>Listagem de Produtos</h2></center>
				</tr></td>
				<tr><td>
					<?php
					
					$ligacao= mysqli_connect('localhost','root','') or die("Nao e possivel estabelecer a ligacao");
					mysqli_select_db($ligacao,'pap') or die ("Nao e possivel ligar a BD");
					$COMANDO = 'select * from produtos order by cod';
					$RESULTADO = MYSQLI_QUERY($ligacao, $COMANDO) OR DIE ('PESQUISA INVÁLIDA');
					$NUM_REGISTOS= MYSQLi_NUM_ROWS($RESULTADO);
					echo '<table><tr><td><h4>Código</h4></td><td></td><td><h4 align="center">Nome</h4></td><td></td><td><h4 align="center">Preço</h4></td><td></td><td><h4 align="center">Imagem</h4></td><td></td><td><h4 align="center">Tipo</h4></td></tr>';
					WHILE ($REGISTO=MYSQLi_FETCH_ARRAY($RESULTADO)) {
					$cod=$REGISTO['cod'];
					$nome_produtos=$REGISTO['nome'];
					$preco_produtos=$REGISTO['preco'];
					$imagem_produtos=$REGISTO['imagem'];
					$tipo_produtos=$REGISTO ['tipo'];
					
					
					echo '<tr><td>'.$cod.'</td><td></td><td>'.$nome_produtos.'</td><td></td><td>'.$preco_produtos.'</td><td></td><td>'.$imagem_produtos.'</td><td></td><td>'.$tipo_produtos.'</td><td></td></tr>';
				}
					echo '</table>';
					
					
					?>
				
				
	<br></br>
	<br style="clear:both"/>
		
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