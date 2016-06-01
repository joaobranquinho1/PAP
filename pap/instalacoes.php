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
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
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
       <li class=""><a href="index1.php">Home</a></li>
        <li><a href="historia1.php">Empresa</a></li>
        <li><a href="produtos1.php">Produtos</a></li>
		<li><a href="instalacoes.php">Instalações</a></li>
        <li><a href="contactos1.php">Localização</a></li>
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
		  <form action="produtos1.php" method="POST">
		  <h2>Faça a sua compra! <input align="center" type="image" src="images/carrinho.png" name="bot" value="compra"></h2>
		</form>
         
		 <h3> Horário Funcionamento </h3>
			<center><p> Segunda a Sexta:</p>
			<p> 09:00h ás 19:00h </p>
			<p> Sábado:
			09:00h ás 13:00h</p></center> 
				</br><br></br><ul class="network" li><a href="https://www.facebook.com/joao.branquinho.37"><img align="right" src="images/faceb.png"></a></ul>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	

	
      <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="instalacoes/12.jpg" /></li>
        <li><img width="680" height="250" src="images/armazem.jpg"  /></li>
		<li ><img width="680" height="250" src="instalacoes/12.jpg" /></li>
      </ul>   	 
	 
	  <div id="content">
        <div class="content_item">
		 <div id="tooplate_main">
    
    <div class="col_w960">
        	
            <div id="gallery">
			
			<h2> Conheça as nossas instalações </h2>

				
				<table>
				<ul>
				<tr>
                	<td>
                		
	                	<a href="instalacoes/2.jpg" title="Nossas Instalacoes">
                		<img src="instalacoes/2.png"/></a>	&nbsp&nbsp			
                    </td>
					<td>
                		
	                	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="instalacoes/12.jpg" title="Nossas Instalacoes">
                		<img src="instalacoes/12.png"/></a>				
                    </td>
					</tr>
					<tr>
                	<td>
                		
	                	<a href="instalacoes/17.jpg" title="Nossas Instalacoes">
                		<img src="instalacoes/17.png"/></a>	&nbsp&nbsp			
                    </td>
					<td>
                		
	                	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="instalacoes/9.jpg" title="Nossas Instalacoes">
                		<img src="instalacoes/9.png"/></a>				
                    </td>
					</tr>
				
					</ul>
      </table>
          </div>
      </div>
  </div>
		  <br style="clear:both"/>
		 
		
	<div id="content_grey">
	<br>
	  <p> Telemóvel: Telemóvel: 969367896 |E-mail: jgbranquinho@hotmail.com </p></br>
      </div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
	  </div><!--close content_grey_container_box1-->      
	 
    
 
  </div><!--close main-->
 
</body>
</html>
