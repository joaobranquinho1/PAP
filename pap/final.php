\<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
<br></br><br></br><ul class="network" li><a href="https://www.facebook.com/joao.branquinho.37"><img align="right" src="images/faceb.png"></a></ul>
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->
	   <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="images/empresa.jpg" /></li>
        <li><img width="680" height="250" src="images/armazem.jpg"  /></li>
      </ul>

	  <div id="content">
        <div class="content_item">

<?php
//session_start();
$sessao=session_id();
$user=$_SESSION['user'];
$nome=$_SESSION['nome'];
$morada=$_SESSION['morada'];
$telefone=$_SESSION['telefone'];
$email=$_SESSION['email'];
$idut=$_SESSION['cod'];

$soma_carrinho=0;
$con = mysqli_connect("localhost","root","","pap");

$query = "SELECT * FROM carrinho WHERE sessao = '".session_id()."'";
$rs_carrinho = mysqli_query($con, $query) or die(mysqli_error());

$totalRows_rs_carrinho = mysqli_num_rows($rs_carrinho);
echo "<h2>Encomenda Finalizada </h2>";
echo "<b><h3>Enviar para: </h3><br>".$nome."<br>";
echo "".$morada."<br>";
echo "".$telefone."<br>";
echo "".$email."<br></b>";

echo "<h3> Produtos encomendados: </h3>";

while($row_rs_carrinho = mysqli_fetch_assoc($rs_carrinho)){

echo '<br>Nome: '.$row_rs_carrinho ['nome'].'<br>';
echo 'Quantidade: '.$row_rs_carrinho ['qtd'].'<br>';
echo 'Preco: '.$row_rs_carrinho ['preco'].'<br><br>';

$query_final ="INSERT INTO carrinho_final (id, cod, nome, preco, qtd, sessao, codcliente)
					VALUES
					('','".$row_rs_carrinho['cod']."','".$row_rs_carrinho['nome']."','".$row_rs_carrinho['preco']."','1','".session_id()."','".$idut."')";
$rs_produto_add = mysqli_query($con, $query_final) or die(mysqli_error());
$soma_carrinho += ($row_rs_carrinho['preco']*$row_rs_carrinho['qtd']);
}
echo '<br> <b>Preco Total: ';
echo number_format($soma_carrinho,2,",",".");
echo '<br><br>';

echo "<a href=index1.php><img src='images/carro.png'>";

$query_apaga="DELETE FROM carrinho WHERE sessao = '".session_id()."';";
$exec_carrinho_excluir = mysqli_query($con, $query_apaga) or die(mysqli_error());

?>

<br></br>
<div id="content_grey">
	  <br>
	  <p> Telemóvel: 969367896 |E-mail: jgbranquinho@hotmail.com </p></br>

	  </div><!--close content_grey_container_box1-->
      </div><!--close content-->
	</div><!--close site_content-->


</body>
</html>
