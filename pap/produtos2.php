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
		  
		   
         
		 
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
      	 
	 
	  <div id="content">
        <div class="content_item">
		   <form action="inserir_produtos.php" method="POST">	
			<h2> Inserir Produtos!</h2>
				
				<br></br>
			<table>
			
			<tr><td><h4>Nome:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <td><input type=text align="left" name="nome" size=30 maxlength></h4>
			<tr><td><h4>Preço:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <td><input type=text align="left" name="preco" size=30 maxlength></h4>
			<tr><td><h4>Imagem:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <td><input type=text name="imagem" size=30 maxlength></h4>
			<tr><td><h4>Tipo:&nbsp&nbsp <td><input type=text name="tipo" size=30 maxlength=30></h4>
			
			</table>
			
				
				<input align="right" type="image" src="images/inse.png" name="bot" value="Registar">
			
				</form>
				<br></br><br></br><br></br>
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