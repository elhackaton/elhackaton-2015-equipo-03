<!DOCTYPE HTML>

<?php 
	session_start();
	$id_usuario = $_SESSION['id'];
	include_once('conexion.php');
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
									<li class="current"><a href="deseo.php">Lanza tu deseo</a></li>
									<li><a href="somos.php">¿Quiénes somos?</a></li>
									<li><a href="manifiesto.php">Manifiesto</a></li>
									<li><a href="buscar.php">¿Quieres cumplir deseos?</a></li>
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
										
										<form action='registrar_deseo.php' method='POST'>
										Escribe un pequeño título descriptivo de tu deseo<br><br>
										<input type='text' name='titulo'><br>
										Desarrolla tu deseo<br><br>
										<textarea name='deseo' rows='4'></textarea>
										<br>
										<select name='categoria'>
											<?php
																
																echo "<option value=0>Escoge una categoría</option>";
																
																
																$consulta="SELECT * FROM categorias";
																$result=mysql_query($consulta)or die ('Ha fallado la conexión: '.mysql_error());
																$array=mysql_fetch_array($result);
																$total_registros = mysql_num_rows($result);
																do{
																		$id = $array['id'];
																		$categoria = $array['categoria'];
																		echo "<option value=".$id.">".$categoria."</option>";
																		echo $categoria."<br>";
																
																}while($array=mysql_fetch_array($result));
											
											?>
											
										
										</select><br>
										<?php
											echo "<input type='hidden' value='$id_usuario' name='id_usuario'>";
										
										?>
										
										<input type='submit' value='Lanzar'>
										
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