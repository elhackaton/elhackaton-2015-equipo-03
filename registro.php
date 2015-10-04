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
									
									<form action='registrar.php' method='POST'>
										Nombre de usuario: <input type='text' name='nombre'>
										Correo electrónico: <input type='text' name='email'>
										Contraseña: <input type='password' name='pwd' ><br>
										Repetir Contraseña: <input type='password' name='pwd2' ><br>
										
										
										<?php
	
											if ($error == 'password'){
														echo "<p style='color:black;font-size:14pt;'>*** Contraseña no coincide</p><br>";
											}
											
											if ($error == 'usuario_exist'){
														echo "<p style='color:black;font-size:14pt;'>*** Existe este correo electrónico dado de alta</p><br>";
											}
											
										?>
										
										
										
										<input type='submit' value='Comenzar a desear'>
										
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