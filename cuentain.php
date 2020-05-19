<?php 

session_start();

  require 'database.php';

  if (!empty($_POST['userd']) && !empty($_POST['pswdd'])) {
    $records = $conn->prepare('SELECT id, userd, pswdd FROM users WHERE userd=:userd');
    $records->bindParam(':userd', $_POST['userd']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results)>0 && password_verify($_POST['pswdd'], $results['pswdd'])) {
      $_SESSION['userd_id'] = $results['id'];
	  $message = 'yes! now you have a count';
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/1e7ee98343.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="estilosyefectos.css">
	<title>registro</title>
</head>
<body>
	<div class="contenedor">
		<header>
			<div class="logo">
				<h1>Licuchi</h1>
				<img src="logo.jpg" width="50" height="100">

				<p>Pagina de estilo</p>
				<nav class="icons">
					<ul>
					<li><a href="compras.html"><img src="carro.svg" ></a></li>
					<li><a>                </a></li>
	                 <li><a href="cuenta.html" class="activo"><img src="user.svg" ></a>
	                 <ul class="subicons" >
	                 	<li><a href="cuenta.php" >crear una cuenta</a></li>
	                 	<li><a href="cuentain.php">       entrar    </a></li>
	                 </ul>
	                </li>
					</ul>
				</nav>
			</div>
			
<nav class="menu1">
	<center>
	<ul>
	<li><a href="inicio.html">Inicio</a></li>
	<li><a href="licuchi.html">Productos</a></li>
	<li><a href="Nosotros.html">Nosotros</a></li>
	
	<li><a href="clientes.html">conocenos</a></li>
	<li><a href="contactos.html">control</a></li>	
	</ul>
	</center>
	<br>
	<br>

	 <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

	<center><h1>iniciar sesi&oacute;n</h1></center>
<br>
<div class="formr"> 
<form action="cuentain.php" method="POST">

	<section class="ccr" >
		<br>

	<label align="left">Usuario: </label> 
	<input  name="userd" type="text" placeholder="Usuario" required=""><br></br>
	<label align="left">Contrase&ntilde;a: </label>
	<input  name="pswdd" type="password" placeholder="Contrase&ntilde;a" required=""><br></br> 
	<br>
	<center>
	<input  type="submit" value="entrar">
</form>
<br></br>
<p>no tienes cuenta?<a href="cuenta.php">registrate</a></p>
	</center>
	</div>
	
	</section>
	
<footer class="contenedor">
			<div class="redes-sociales">
				<div class="contenedor-icono">
					<a href="http://www.twitter.com/Tonylirac" target="_blank" class="twitter">
						<i class="fab fa-twitter"></i>
					</a>
				</div>
				<div class="contenedor-icono">
					<a href="http://www.facebook.com/tonylirac" target="_blank" class="facebook">
						<i class="fab fa-facebook-f"></i>
					</a>
				</div>
				<div class="contenedor-icono">
					<a href="http://www.instagram.com/joseph_antony_lira" target="_blank" class="instagram">
						<i class="fab fa-instagram"></i>
					</a>
				</div>
			</div>
			<div class="creado-por">
				<p>Sitio de <a href="#">Tony Lira</a> - <a href="">Licuchi</a></p>
			</div>
		</footer>
	</div>
	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
<script src="main.js"></script>
</body>
</html>
</body>
</html>
