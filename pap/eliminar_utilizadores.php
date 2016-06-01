<?php
			$LIGACAO = MYSQLI_CONNECT("localhost", "root", "", "pap") OR DIE("NÃO É POSSÍVEL ESTABELECER A LIGAÇÃO");
		
			$idutilizadores=$_POST['idutilizadores']; 
			$COMANDO="DELETE FROM utilizadores WHERE idutilizadores='$idutilizadores'"; 
			$RESULTADO=MYSQLi_QUERY($LIGACAO,$COMANDO) OR DIE("<p3> REMOÇÃO INVÁLIDA </p3>"); 
			IF(MYSQLi_AFFECTED_ROWS($LIGACAO)) header("location:listar_utilizadores.php"); 
		?> 