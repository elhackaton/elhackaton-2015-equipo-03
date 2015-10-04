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
									<li class="current"><a href="manifiesto.php">Manifiesto</a></li>
									<li><a href="buscar.php">¿Quieres cumplir deseos?</a></li>
									<li><a href="perfil.php">Mi perfil</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">

						<!-- Content -->
							<article class="box post">
								
								<header>
									<h2>MANIFIESTO PARA EL ARTE DE DESEAR</h2>
									
								</header>
								<p>Desea lo que quieras y hazlo saber.</p>
								<p>Cree en la gente, porque todo el mundo tiene algo que ofrecer.</p>
								<p>Cuando hagas algo por alguien, no pienses en otra recompensa que la satisfacción de hacerle feliz.</p>
								<p>Construye tu propio destino y sonríe siempre, porque la felicidad esta en las pequeñas cosas y muchas veces son más fáciles de alcanzar de lo que imaginamos.</p>
								<p>Cree en ti, en los demás y en lo posible, porque estas tres cosas son la base de todos nuestros sueños. </p>
								<section>
									<header>
										<h3>Aprovecha tu vida a tu manera, exprímela! sé la mejor versión de ti mismo.</h3>
									</header>
									<p>
										Comparte tus deseos y haz que los de los demás se hagan realidad, porque el mundo pertenece a los soñadores. 
									</p>
									
								</section>
								
							</article>

					</div>
				</div>

			<!-- Footer -->
				<?php include_once('footer.php'); ?>

		</div>

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