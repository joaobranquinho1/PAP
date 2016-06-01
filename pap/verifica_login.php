<?php 
//ob_start();
$ligacao=mysqli_connect("localhost","root","","pap") or die ("Erro na Liga��o");
$user=$_POST['user'];
$pass=$_POST['pass'];
$user = stripslashes($user);
echo "Ligação ok";
$query=mysqli_query($ligacao,"select * from utilizadores where username like '$user' and password like '$pass'");
$count=mysqli_num_rows($query);
$dados=mysqli_fetch_array($query);

  if($count==1){
	if($dados['tipo']==0){
	session_start();
	$_SESSION['user']=$dados['username'];
	$_SESSION['cod']=$dados['idutilizadores'];
	$_SESSION['nome']=$dados['nome'];
	$_SESSION['morada']=$dados['morada'];
	$_SESSION['telefone']=$dados['telefone'];
	$_SESSION['email']=$dados['email'];
	echo "Login com sucesso";
	header("location:index1.php");
  }
  if($dados['tipo']==1){
	 session_start();
	 $_SESSION['user']=$dados['username'];
	echo "Login com sucesso";
	header("location:index2.php");}
  }
  mysqli_close($ligacao);
  //ob_end_flush();
  ?>
  