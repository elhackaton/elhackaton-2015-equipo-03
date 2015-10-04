<!DOCTYPE HTML>

<?php 
	session_start();
	$id_usuario = $_SESSION['id'];
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
									<li><a href="buscar.php">¿Quieres cumplir deseos?</a></li>
									<li class="current"><a href="perfil.php">Mi perfil</a></li>
								</ul>
							</nav>



					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
				
					
					<div class="container">
					
						<div class="row">
						
							<div class="12u">

								<!-- Portfolio -->
									<section>
									
									
									
										
										
											
											
											<?php
											
											include_once('conexion.php'); $contador = 0;
											
											$consulta="SELECT * FROM deseos WHERE id_usuario = '$id_usuario' ";
											$result=mysql_query($consulta)or die ('Ha fallado la conexión: '.mysql_error());
											$array=mysql_fetch_array($result);
											$total_registros = mysql_num_rows($result);
											do{
													$id = $array['id'];
														$contador3=0;
																	$consulta3="SELECT * FROM deseos_cumplidos WHERE id_deseo = '$id' ";
																	$result3=mysql_query($consulta3)or die ('Ha fallado la conexión: '.mysql_error());
																	$array3=mysql_fetch_array($result3);
																	$total_registros3 = mysql_num_rows($result3);
																	do{
																				$comentario = $array3['comentario'];
																				if ($comentario != ''){$contador3++;}
																	}while($array3=mysql_fetch_array($result3));
													
													
													$t_deseo = $array['t_deseo'];
													$deseo = $array['deseo'];
													$id_categoria = $array['id_categoria'];
													$imagen_deseo = $array['imagen_deseo'];
											
													if ($contador == 0){
														echo '<div class="row">';
														
														
															echo '<div class="3u 12u(mobile)">
																			<section class="box">';
																				
																				
																				if ($imagen_deseo == ''){
																							$consulta2="SELECT * FROM categorias WHERE id = '$id_categoria' ";
																							$result2=mysql_query($consulta2)or die ('Ha fallado la conexión: '.mysql_error());
																							$array2=mysql_fetch_array($result2);
																							$total_registros2 = mysql_num_rows($result2);
																							do{
																									$imagen_deseo = $array2['imagen'];
																							}while($array2=mysql_fetch_array($result2));
																							
																							echo '<a href="cumplir_deseo.php?id='.$id.'" class="image featured"><img src="images/'.$imagen_deseo.'" alt="" /></a>';
																							
																				}else{
																							echo '<a href="cumplir_deseo.php?id='.$id.'" class="image featured"><img src="images/'.$imagen_deseo.'" alt="" /></a>';
																				}
																				
																				
																				
																				echo '<header>
																					<h3>'.$t_deseo.'</h3>
																				</header>
																				<p>'.$deseo.'</p>
																				<footer>
																					<a href="cumplir_deseo.php?id='.$id.'" class="button alt">'.$contador3.' Comentarios</a>
																				</footer>
																			</section>
																	</div>';
															$contador++;
													
													
													}else{
													
														echo '<div class="3u 12u(mobile)">
																			<section class="box">';
																				 
																				
																				if ($imagen_deseo == ''){
																							$consulta2="SELECT * FROM categorias WHERE id = '$id_categoria' ";
																							$result2=mysql_query($consulta2)or die ('Ha fallado la conexión: '.mysql_error());
																							$array2=mysql_fetch_array($result2);
																							$total_registros2 = mysql_num_rows($result2);
																							do{
																									$imagen_deseo = $array2['imagen'];
																							}while($array2=mysql_fetch_array($result2));
																							
																							echo '<a href="cumplir_deseo.php?id='.$id.'" class="image featured"><img src="images/'.$imagen_deseo.'" style="height:190px";/></a>';
																							
																				}else{
																							echo '<a href="cumplir_deseo.php?id='.$id.'" class="image featured"><img src="images/'.$imagen_deseo.'" style="height:190px";/></a>';
																				}
																				
																				
																				
																				echo '<header>
																					<h3>'.$t_deseo.'</h3>
																				</header>
																				<p>'.$deseo.'</p>
																				<footer>
																					<a href="cumplir_deseo.php?id='.$id.'" class="button alt">'.$contador3.' Comentarios</a>
																				</footer>
																			</section>
																	</div>';
															$contador++;
													
													}
											
											
												if ($contador == 4){
														$contador = 0;
														
														echo "</div>";
												}
											
											}while($array=mysql_fetch_array($result));
									
									
											?>
											
											
										
										
										
										
									</section>

							</div>
						</div>
						
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