<?php 

require 'database.php';

$message = '';

  if (!empty($_POST['userd']) && !empty($_POST['pswdd'])) {
    $sql = "INSERT INTO users (userd, pswdd) VALUES (:userd, :pswdd)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userd', $_POST['userd']);
    $pswdd = password_hash($_POST['pswdd'], PASSWORD_BCRYPT);
    $stmt->bindParam(':pswdd', $pswdd);

     if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
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
					<li><a href="cuenta.html"><img src="carro.svg" ></a></li>
					<li><a>                </a></li>
	                 <li><a href="cuenta.php" class="activo"><img src="user.svg" ></a>
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

	<center><h1>registro</h1></center>
<br>
<div class="formr"> 
<form action="cuenta.php" method="POST">
<section class="ccr" >
		<br>
	<label align="left">Usuario: </label> 
	<input name="userd" type="text"  placeholder="Usuario"><br></br>
	<label align="left">E-mail:</label> 
	<input  name="mail" type="text"  placeholder="E-mail"><br></br>
	<label align="left">Contrase&ntilde;a: </label>
	<input name="pswdd" type="password" placeholder="Contrase&ntilde;a">
	 
	<br></br>
	<center>
	<input  type="submit" value="registrar">
</form>
<br></br>
<p>ya tienes cuenta?<a href="cuentain.php">iniciar sesion</a></p>
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