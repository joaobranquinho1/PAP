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
				<br></br><ul class="network" li><a href="https://www.facebook.com/joao.branquinho.37"><img align="right" src="images/faceb.png"></a></ul>
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->


       <div id="content">
        <div class="content_item">
        <li class="show"><img width="680" height="250" src="images/componentes1.png"/></li>
		<div id='cssmenu'>
<ul>

   <li><a href='motherboard.php'>Motherboards</a></li>
   <li><a href='software.php'>Softwares</a></li>
   <li><a href='computadores.php'>Computadores</a></li>
   <li><a href='impressoras.php'>Impressoras</a></li>
   <li><a href='componentes.php'>Componentes</a></li>
	<li><a href='malas.php'>Malas</a></li>
</ul>
</div>


			<?php
include "Connections/conn.php";
//*********************************************************************
// CONFIGURAÇÃO DE BASE DE DADOS
//*********************************************************************
$con = mysqli_connect($hostname_conn,$username_conn,$password_conn,$database_conn);

?>
<table cellSpacing=1 cellPadding=0 width="50%" align=center border=0>
<tr>
 <td>
     <?php
 //*********************************************************************
 // GERA A INSTRUÇÃO SQL E CHAMA A FUNÇÃO PARA CRIAR AS COLUNAS
 //*********************************************************************
 $sql = "SELECT * FROM produtos where tipo='componentes' ORDER BY RAND()";
 GeraColunas(3, $sql)
 ?>
</td>
</tr>
</table>
<?php
//*********************************************************************
// FUNÇÃO: CRIACOLUNAS
// Parametros:
//  $pNumColunas (int)   > Quant. de colunas para distribuição
//  $pQuery    (string) > Query de registros
//*********************************************************************
function GeraColunas($pNumColunas, $pQuery) {
	$con = mysqli_connect("localhost","root","","pap");
$resultado = mysqli_query($con, $pQuery);
echo ("<table width='100%' border='0'>\n");
 for($i = 0; $i <= mysqli_num_rows($resultado); ++$i) {

 for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
  $linha = mysqli_fetch_array($resultado, MYSQLI_NUM);
  if ($i > $linha) {
   if ( $intCont < $pNumColunas-1) echo "</tr>\n";
   break;
  }

  $cod = $linha[0];
  $nome = $linha[1];
  $img = $linha[5];
  $preco = number_format($linha[2],2,",",".");

  if ( $intCont == 0 ) echo "<tr>\n";
  echo "<td>";
  // Aqui você inclui o conteudo
  echo "<table width='220' border='0' cellspacing='0' cellpadding='0'>";
  echo "<tr>";
  echo "<td width='250' height='141' valign='middle'><div align='center'><img src='componentes/".$img."' border='0' width='80' height='80' /></div></td>";
echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo "<table width='92%' border='0' align='center' cellpadding='0' cellspacing='0'>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><strong><a href='carrinho.php?cod=".$cod."&acao=incluir'>".$nome."</a></strong></div><strong><div align='center'><font color='#000000' size='2px'> € ".$preco." </font></strong></div></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><a href='carrinho.php?cod=".$cod."&acao=incluir'><img src='images/carrinho.png' border='0'/></a></div><br></td>";
  echo "</tr>";
  echo "</table>";
  echo "</td>";
  echo "</tr>";
  echo "</table>";

   // Aqui é o final do conteudo
  echo "</td>";

  if ( $intCont == $pNumColunas-1 ) {
   echo "</tr>\n";
  } else { $i++; }
 }

 }
echo ('</table>');
}

?>
		  <br style="clear:both"/>


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
