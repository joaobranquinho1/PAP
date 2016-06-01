<?php include 'header.php'; ?>

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
		    <h2>Faça a sua compra! <input align="center" type="image" src="images/carrinho.png" name="bot" value="compra"></h2>
		</form>

		 <h3> Horário Funcionamento </h3>
			<center><p> Segunda a Sexta:</p>
			<p> 09:00h ás 19:00h </p>
			<p> Sábado:
			09:00h ás 13:00h</p></center>
				</br><ul class="network" li><a href="https://www.facebook.com/joao.branquinho.37"><img align="right" src="images/faceb.png"></a></ul>

          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->
	  <div id="content">
        <div class="content_item">
      <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="images/empresa.jpg"  /></li>
        <li><img width="680" height="250" src="images/armazem.jpg"  /></li>
      </ul>
	 <?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>

<?php
// Iniciamos nossa sessão que vai indicar o usuário pela session_id
session_start();

include "Connections/conn.php";
// Recuperamos os valores passados por parametros
$acao = $_GET['acao'];
$cod =  $_GET['cod'];

$con = mysqli_connect("localhost","root","","pap");

// Verificamos se a acao é igual a incluir
if ($acao == "incluir")
{
// Verificamos se cod do produto é diferente de vazio
if ($cod != '')
{
// Se for diferente de vazio verificamos se é numérico
if (is_numeric($cod))
{
  // Tratamos a variavel de caracteres indevidos
$cod = addslashes(htmlentities($cod));

// Verificamos se o produto referente ao $cod já está no carrinho para o session id correnpondente
$query_rs_carrinho = "SELECT * FROM carrinho WHERE cod = '".$cod."'  AND carrinho.sessao = '".session_id()."'";
$rs_carrinho = mysqli_query($con, $query_rs_carrinho) or die(mysqli_error());
$row_rs_carrinho = mysqli_fetch_assoc($rs_carrinho);
$totalRows_rs_carrinho = mysqli_num_rows($rs_carrinho);

// Se o total for igual a zero é sinal que o produto ainda não está no carrinho
if ($totalRows_rs_carrinho == 0)
{
  // Aqui pegamos os dados do produto a ser incluido no carrinho
  $query_rs_produto = "select * from produtos where cod = '".$cod."'";
  $rs_produto = mysqli_query($con, $query_rs_produto) or die(mysqli_error());
  $row_rs_produto = mysqli_fetch_assoc($rs_produto);
  $totalRows_rs_produto = mysqli_num_rows($rs_produto);

  // Se total for maior que zero esse produto existe e então podemos incluir no carrinho
  if ($totalRows_rs_produto > 0)
  {
    $registro_produto = mysqli_fetch_assoc($rs_produto);
    // Incluimos o produto selecionado no carrinho de compras
    $add_sql = "INSERT INTO carrinho (id, cod, nome, preco, qtd, sessao)
    VALUES
    ('','".$row_rs_produto['cod']."','".$row_rs_produto['nome']."','".$row_rs_produto['preco']."','1','".session_id()."')";
    $rs_produto_add = mysqli_query($con, $add_sql) or die(mysqli_error());
  }
}
}
}
}

// Verificamos se a acao é igual a excluir
if ($acao == "excluir")
{
$cod=$_GET['cod'];
// Verificamos se cod do produto é diferente de vazio
if ($cod != '')
{
// Se for diferente de vazio verificamos se é numérico
if (is_numeric($cod))
{
  // Tratamos a variavel de caracteres indevidos
$cod = addslashes(htmlentities($cod));
// Verificamos se o produto referente ao $cod  está no carrinho para o session id correnpondente
$query_rs_car = "SELECT * FROM carrinho WHERE cod = '$cod'  AND sessao = '".session_id()."'";
$rs_car = mysqli_query($con, $query_rs_car) or die(mysqli_error());
$row_rs_carrinho = mysqli_fetch_assoc($rs_car);
$totalRows_rs_car = mysqli_num_rows($rs_car);

// Se encontrarmos o registro, excluimos do carrinho
if ($totalRows_rs_car > 0)
{
  $sql_carrinho_excluir = "DELETE FROM carrinho WHERE cod = '$cod' AND sessao = '".session_id()."'";
  $exec_carrinho_excluir = mysqli_query($con, $sql_carrinho_excluir) or die(mysqli_error());
}
}
}
}

// Verificamos se a ação é de modificar a quantidade do produto
if ($acao == "modifica")
{
$quant = $_POST['qtd'];
// Se for diferente de vazio verificamos se é numérico
if (is_array($quant))
{
  // Aqui percorremos o nosso array
foreach($quant as $cod => $qtd)
{
  // Verificamos se os valores são do tipo numeric
  if(is_numeric($cod) && is_numeric($qtd))
  {
    // Fazemos nosso update nas quantidades dos produtos
    $sql_modifica = "UPDATE carrinho SET qtd ='$qtd' WHERE  cod = '$cod' AND sessao = '".session_id()."'";
    $rs_modifica = mysqli_query($con, $sql_modifica) or die(mysqli_error());
  }
}
}

}

if ($acao == "finalizar")
{
header("location:final.php");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset='utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
.style3 {font-size: 10px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style4 {
color: #FF0000;
font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center"><img src="images/encomenda.png" width="400" height="80" />
</div>
<form action="carrinho.php?acao=modifica" method="post">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<th width="36%" scope="col"><div align="left">PRODUTO</div></th>
<th width="22%" scope="col">PRE&Ccedil;O</th>
<th width="13%" scope="col">QUANTIDADE</th>
<th width="14%" scope="col">SUBTOTAL</th>
<th width="15%" scope="col">&nbsp;</th>
</tr>

<?php
$sql_meu_carrinho = "SELECT * FROM carrinho WHERE  sessao = '".session_id()."' ORDER BY nome ASC";
$exec_meu_carrinho =  mysqli_query($con, $sql_meu_carrinho) or die(mysqli_error());
$qtd_meu_carrinho = mysqli_num_rows($exec_meu_carrinho);

if ($qtd_meu_carrinho > 0)
{
$soma_carrinho = 0;
while ($row_rs_produto_carrinho = mysqli_fetch_assoc($exec_meu_carrinho))
{
$soma_carrinho += ($row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd']);
?>
<tr>

<td><span class="style3">

<?php echo ''.$row_rs_produto_carrinho['nome'].'';?>
</span></td>
<td><div align="center" class="style3"><?php echo number_format($row_rs_produto_carrinho['preco'],2,",","."); ?></div></td>
<td><div align="center" class="style3"><input type="text" size="2" name="qtd[<?=$row_rs_produto_carrinho['cod']?>]"  value="<?php echo''.$row_rs_produto_carrinho['qtd'].'';?>"/></div></td>
<td><div align="center" class="style3"><?php echo number_format($row_rs_produto_carrinho['preco']*$row_rs_produto_carrinho['qtd'],2,",","."); ?></div></td>
<td><div align="center"><a href="carrinho.php?cod=<?=$row_rs_produto_carrinho['cod'];?>&acao=excluir"><img src="images/excluir.gif" width="20" height="21" border="0" /></a></div></td>
</tr>
<?php
}
}
?>
<tr>
<td colspan="3"><div align="right"><strong>TOTAL:</strong>&nbsp; </div>        <div align="right"></div>        <div align="right"></div></td>
<td><div align="center" class="style3 style4">
<?php echo number_format($soma_carrinho,2,",","."); ?></div></td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="5"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="33%" height="60" scope="col"><span class="style3"><a href="produtos1.php"><img src="images/continuar.png" width="180" height="40" border="0" /></a></span></th>

    <th width="34%" scope="col"><label>
      <input type="image" name="imageField" src="images/atualizar.png" width="180" height="40"  />
    </label></th>
<th width="34%" scope="col"> <a href="carrinho.php?sessao=<?=session_id()?>&acao=finalizar"><img src="images/final.png" width="180" height="40"  /></th>
  </tr>

</table></td>

</tr>
</table>
</form>
</body>
</html>
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
