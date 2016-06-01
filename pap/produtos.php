
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Carrinho de Compras</title>
</head>

<body>
<div align="center">
<?php

//ob_start();

if(!($conn = mysqli_connect("localhost","root","", "pap"))) 
{
   echo "Erro ao conectar ao MySQL.";
   exit;
}


//*********************************************************************
// CONFIGURAÇÃO DE BANCO DE DADOS
//*********************************************************************
$con = mysqli_connect("localhost","root", "", "pap");

?>
<table cellSpacing=1 cellPadding=0 width="50%" align=center border=0>
<tr>
 <td>
 <?php
 //*********************************************************************
 // GERA A INSTRUÇÃO SQL E CHAMA A FUNÇÃO PARA GERAR AS COLUNAS
 //*********************************************************************
 $sql = "SELECT * FROM produtos ORDER BY RAND() LIMIT 0,4";
 GeraColunas(2, $sql)
 ?>
</td>
</tr>
</table>
<?php
//*********************************************************************
// FUNÇÃO: GERACOLUNAS
// Parametros:
//  $pNumColunas (int)   > Quant. de colunas para distribuição
//  $pQuery    (string) > Query de registros
//*********************************************************************
function GeraColunas($pNumColunas, $pQuery) {
$con = mysqli_connect("localhost","root", "", "pap");
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
  echo "<table width='266' border='0' cellspacing='0' cellpadding='0'>";
  echo "<tr>";
  echo "<td width='250' height='141' valign='middle'><div align='center'><img src='images/".$img."' border='0' width='189' height='141' /></div></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>";
  echo "<table width='92%' border='0' align='center' cellpadding='0' cellspacing='0'>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><strong><a href='carrinho_p.php?cod=".$cod."&acao=incluir'>".$nome."</a></strong></div><strong><div align='center'><font color='#FF0000' size='4px'>  ".$preco."  </font></strong></div></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><div align='center' style='font-size:10px;font-family:Verdana'><a href='carrinho_p.php?cod=".$cod."&acao=incluir'><img src='imgs/add_carrinho.jpg' border='0'/></a></div><br></td>";
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
</div>
</body>
</html>
  