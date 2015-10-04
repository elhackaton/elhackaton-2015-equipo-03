<?php

		$usuario=$_POST["email"];
		$contrasena=$_POST["pwd"];

		include_once('conexion.php');

		if(trim($usuario) !="" && trim($contrasena) !=""){

		$consulta="SELECT pwd, nombre, email, nombre,id FROM usuarios WHERE email='".$usuario."'";
		$result=mysql_query($consulta)or die ('Ha fallado la conexión: '.mysql_error());
		if($row=mysql_fetch_row($result)){
					if($row[0] == $contrasena){
							session_start();
							
							$_SESSION["nombre_usuario"] = $row[1];
							$_SESSION["email"] = $row[2];
							$_SESSION["nombre"] = $row[3]; 
							$_SESSION["id"] = $row[4]; 


							echo "<SCRIPT LANGUAGE='javascript'>location.href = 'wall.php';</SCRIPT>";

					} else{
						echo "<SCRIPT LANGUAGE='javascript'>location.href = 'login.php?error=password';</SCRIPT>";
					}

		}else{
				echo "<SCRIPT LANGUAGE='javascript'>location.href = 'login.php?error=usuario';</SCRIPT>";

		}

		mysql_free_result($result);

		}else{
				echo "<SCRIPT LANGUAGE='javascript'>location.href = 'login.php?error=campos';</SCRIPT>";
		}

mysql_close();


?>