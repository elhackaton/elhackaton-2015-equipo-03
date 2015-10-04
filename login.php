<!DOCTYPE HTML>

<html>
	<head>
		<title>wish Up!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="favicon.ico">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body >
	
	
	<?php
		error_reporting(0);
		$error = $_GET['error'];
	?>
		

			<!-- Header -->
				
					<div id="header">
				<!-- Banner -->
							<section id="banner" style='margin-top:0px;'>
								<h1><a href="index.php"><img src='images/logo.png'></a></h1>
								<header>
									
									<form action='validar_usuario.php' method='POST'>
										Correo electrónico: <input type='text' name='email'>
										Contraseña: <input type='password' name='pwd' ><br>
										
										
										<?php
	
											if ($error == 'password'){
														echo "<p style='color:black;font-size:14pt;'>*** Contraseña incorrecta</p><br>";
											}
											
											if ($error == 'usuario'){
														echo "<p style='color:black;font-size:14pt;'>*** Usuario o password incorrecto</p><br>";
											}
											
											if ($error == 'campos'){
														echo "<p style='color:black;font-size:14pt;'>*** Es necesario rellenar todos los campos</p><br>";
											}
											
										?>
										
										<input type='submit' value='Conectar'>
										
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