<?php
		
		include_once('conexion.php');
	$contador = 0;
             $cumplir=$_POST["cumplir"];
			 $id_usuario=trim($_POST["id_usuario"]);
			 $id_deseo=trim($_POST["id_deseo"]);
			 
			 
			/* if ($pwd != $pwd2){
				echo '<SCRIPT LANGUAGE="javascript">location.href = "deseo.php?error=categoria";</SCRIPT>'; 
			 $contador++;
			 }
			 
			 $consulta="SELECT * FROM usuarios 
						WHERE email='$email' ";
			 $result=mysql_query($consulta)or die ('Ha fallado la conexión: '.mysql_error());
			 if($array=mysql_fetch_array($result)){
				$contador++;	
				echo '<SCRIPT LANGUAGE="javascript">location.href = "registro.php?error=usuario_exist";</SCRIPT>';
			 }*/
			 
			 function reem($texto1) {

			//Rememplazamos caracteres especiales latinos minusculas
			$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ', '\"', '€', 'ü');
			$repl = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&ntilde;', '&quot;', '&euro;', '&uuml;');
			$texto1 = str_replace ($find, $repl, $texto1);


			//Rememplazamos caracteres especiales latinos mayusculas
			$find = array('Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ü', 'ç', 'Ç');
			$repl = array('&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;', '&Ntilde;', '&Uuml;', '&ccedil;', '&Ccedil;');
			$texto1 = str_replace ($find, $repl, $texto1);

			return $texto1;

			}  
			
			
			$cumplir = reem($cumplir);
			
			 
			if ($contador == 0){ 
			 
			 $consulta = ("INSERT INTO deseos_cumplidos(id_deseo,id_usuario,comentario ) 
			 values('{$id_deseo}','{$id_usuario}','{$cumplir}')");

             $resultado = mysql_query($consulta) or die (mysql_error());
             $datos = @mysql_fetch_array($resultado);
			 mysql_close();
			}


?>

<SCRIPT LANGUAGE="javascript">
location.href = "wall.php";
</SCRIPT>