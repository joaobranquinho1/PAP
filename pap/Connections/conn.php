<?php
$hostname_conn = "127.0.0.1";
$database_conn = "pap";
$username_conn = "root";
$password_conn = "";

// Conectamos ao nosso servidor MySQL
if(!($conn = mysqli_connect($hostname_conn,$username_conn,$password_conn, $database_conn))) 
{
   echo "Erro ao conectar ao MySQL.";
   exit;
}

?>
