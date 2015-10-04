<!DOCTYPE HTML>

<?php 
	session_start();
	echo $_SESSION['nombre_usuario'];
?>

<html>
	<head>
		<title>Wish Up!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="favicon.ico">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							<h1><img src='images/logocolor.png'></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="wall.php">Wall</a></li>
									<li><a href="deseo.php">Lanza tu deseo</a></li>
									<li><a href="somos.php">¿Quiénes somos?</a></li>
									<li><a href="manifiesto.php">Manifiesto</a></li>
									<li class="current"><a href="buscar.php">¿Quieres cumplir deseos?</a></li>
									<li><a href="perfil.php">Mi perfil</a></li>
								</ul>
							</nav>

					</div>
				</div>
	
		

			<!-- Header -->
				
					<div id="header">
				<!-- Banner -->
							<section id="banner" style='margin-top:0px;'>
								<header>
										
										<form action='resultado_busqueda.php' method='POST'>
										Escribe qué o qué quieres aportar y nuestro algoritmo de busqueda encontrará para tí personas que necesitan tu ayuda. <br><br>
										<input type='text' name='busqueda'>
										<br>
										
										<input type='submit' value='Buscar'>
										
									</form>
									
									
								</header>
							</section>


		</div>
		
		
		<!-- Footer -->
				<?php include_once('footer.php'); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>