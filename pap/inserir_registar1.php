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
             <ul id="menu">
<li class=""><a href="index2.php">Home </a></li>
<li><a href="registar.php">Utilizadores </a></li>
        <li><a href="listar_utilizadores.php">Listar Util.</a></li>
        <li><a href="produtos2.php">Comp. </a></li>
		 <li><a href="listar_produtos.php">Lista comp.</a></li>
      </ul>
    </div><!--close menubar-->	
    
	<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            
			 
			<form action="logout.php" method="POST">
			 <h2>Logout&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input align="center" type="image" src="images/logout1.png" name="bot" value="Logout"></h2>
            		
					
				<?php
				echo '<h3>Bem Vindo !</h3>';
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
		
<?php
 $ligacao= mysqli_connect('localhost','root','') or die("Nao e possivel estabelecer a ligacao");
 mysqli_select_db($ligacao,'pap') or die ("Nao e possivel ligar a BD");
 
 $nome_utilizadores=$_POST['nome']; 
 $username_utilizadores=$_POST['username']; 
 $password_utilizadores=$_POST['password'];
 $email_utilizadores=$_POST['email'];
 $morada_utilizadores=$_POST['morada'];
 $codpostal_utilizadores=$_POST['codpostal'];
 $telefone_utilizadores=$_POST['telefone'];
 $nif_utilizadores=$_POST['nif'];
 

echo '<h4>Nome:'.$nome_utilizadores. '<br /></h4>';
echo '<h4>Username: '.$username_utilizadores. '<br /></h4>';
echo '<h4>Password:  '.$password_utilizadores. '<br /></h4>';
echo '<h4>Email: '.$email_utilizadores. '<br /></h4> ';
echo '<h4>Morada: '.$morada_utilizadores. '<br /></h4> ';
echo '<h4>Código-Postal: '.$codpostal_utilizadores. '<br /></h4>';
echo '<h4>Telefone: '.$telefone_utilizadores.'<br /></h4>';
echo '<h4>Nif:'.$nif_utilizadores. '<br /></h4> ';

 
 $comando="insert into utilizadores(username,password,tipo, email, nome, nif,telefone,morada) values('$username_utilizadores','$password_utilizadores','0','$email_utilizadores','$nome_utilizadores','$nif_utilizadores','$telefone_utilizadores','$morada_utilizadores')";
 $resultado= mysqli_query($ligacao,$comando) or die ("Operacao Invalida");
 if(mysqli_affected_rows($ligacao))
	echo "<h3>Registo Efectuado com Sucesso</h3>";
	?>
	
		 
		 
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	<div id="content_grey">
	  	  <br>
	  <p> Telemóvel: 969367896 |E-mail: jgbranquinho@hotmail.com </p></br>
		 
      
	  </div><!--close content_grey_container_box1-->      
	 
    
 
  </div><!--close main-->
 
</body>
</html>
