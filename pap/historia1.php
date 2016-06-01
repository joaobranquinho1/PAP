<?php include 'header.php'; ?>

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
			</br></br><ul class="network" li><a href="https://www.facebook.com/joao.branquinho.37"><img align="right" src="images/faceb.png"></a></ul>
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->

      <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="images/empresa.jpg" /></li>
        <li><img width="680" height="250" src="images/armazem.jpg" /></li>
      </ul>

	  <div id="content">
        <div class="content_item">
		   <h3>História </h3>
	   <p align="justify">Web7 foi uma empresa fundada em 2007 pelo Sr. Carlos Alberto, em Santa Comba Dão.</p>
	   <p align="justify">Esta empresa vende material informático e faz manutenção de computadores.</p>
	   <p align="justify">Atualmente, é uma empresa que comercializa grandes quantidades de produtos.</p>
	    <p align="justify">A empresa está estruturada para responder rapidamente aos seus clientes.</p>
		<p align="justify">A Web7 é uma das empresas mais conceituadas no distrito de Viseu na venda de material informático.</p>
		  <br style="clear:both"/>

		 <div id="content_grey">
	  <br>
	  <p> Telemóvel: 969367896 |E-mail: jgbranquinho@hotmail.com 	</p></br>

		</div><!--close content_item-->
      </div><!--close content-->
	</div><!--close site_content-->
</div><!--close content_grey_container_box1-->



  </div><!--close main-->

</body>
</html>
