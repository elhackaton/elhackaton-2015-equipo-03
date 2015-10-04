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
									<li class="current"><a href="somos.php">¿Quiénes somos?</a></li>
									<li><a href="manifiesto.php">Manifiesto</a></li>
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
								<a href="#" class="image featured"><img src="images/fotogrupo.jpg" alt="" /></a>
								
								<p>
									Vivimos en la sociedad del deseo, todo es apetecible, deseable, y sobre todo comprable. Desde Wish Up queremos dar un giro a esta forma de desear, porque tener deseos está genial, pero ¿qué satisface más nuestra vida, nuestro día a día: un deseo banal, de usar y tirar o un deseo que se traduzca en una experiencia que podamos recordar para siempre y forme parte de lo que somos?¿ y si además nosotros mismos formamos parte fundamental y hacemos realidad los deseos de otra gente? ¿no estaríamos contribuyendo a crear un mundo mejor?


								</p>
								<p>
									Un claro y contundente Sí. Por eso apostamos por la personas, por su capacidad de desear  y por su generosidad para compartir y hacer deseos realidad. Porque cada uno de nosotros puedes ser el genio de la lámpara de alguien y alguien puede ser el nuestro.


								</p>
								
								
								<p>
									Por todo esto y con el único fin de hacer posible que tus sueños se cumplan, surge WISHUP un proyecto joven, ambicioso y entusiasta pensado, troceado y cocido al vapor para que todos sus nutrientes se mantengan intactos. 



								</p>
								
								<p><b>Los responsables:</b>Álvaro Castro<br>Emilio Andrés<br>Mónica Pérez<br>Toñi GómezToñi Gómez</p>
								
								<p>
									Un equipo multidisciplinar compuesto por desarrolladores, diseñadores gráficos, creativos publicitarios y sobre todo, apasionados de la tecnología, que creen que los deseos son sueños a corto plazo y son la razón que nos impulsa, que nos mueve, hacia la felicidad. 



								</p>
								
								
								
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