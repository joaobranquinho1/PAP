<?php
			$LIGACAO = MYSQL_CONNECT("localhost", "root", "") OR DIE("NÃO É POSSÍVEL ESTABELECER A LIGAÇÃO"); 
			MYSQL_SELECT_DB("pap") OR DIE("NÃO É POSSÍVEL SELECCIONAR A BASE DE DADOS"); 
		
			$cod=$_POST['cod']; 
			$COMANDO="DELETE FROM carrinho_final WHERE cod='$cod'"; 
			$RESULTADO=MYSQL_QUERY($COMANDO) OR DIE("<p3> REMOÇÃO INVÁLIDA </p3>"); 
			IF(MYSQL_AFFECTED_ROWS()) header("location:listar_encomendas.php"); 
		?> 