<?php
		
		include_once('conexion.php');
	$contador = 0;
             $nombre=trim($_POST["nombre"]);
             $email=trim($_POST["email"]);
			 $pwd=trim($_POST["pwd"]);
			 $pwd2=trim($_POST["pwd2"]);
			 
			 
			 if ($pwd != $pwd2){
				echo '<SCRIPT LANGUAGE="javascript">location.href = "registro.php?error=password";</SCRIPT>'; 
			 $contador++;
			 }
			 
			 $consulta="SELECT * FROM usuarios 
						WHERE email='$email' ";
			 $result=mysql_query($consulta)or die ('Ha fallado la conexión: '.mysql_error());
			 if($array=mysql_fetch_array($result)){
				$contador++;	
				echo '<SCRIPT LANGUAGE="javascript">location.href = "registro.php?error=usuario_exist";</SCRIPT>';
			 }
			
			 
			if ($contador == 0){ 
			 
			 $consulta = ("INSERT INTO usuarios(nombre,email,pwd) 
			 values('{$nombre}','{$email}','{$pwd}')");

             $resultado = mysql_query($consulta) or die (mysql_error());
             $datos = @mysql_fetch_array($resultado);
			 mysql_close();
			}


$asunto = "Bienvenido ".$nombre; 
$cuerpo = ' 
<html> 
<head> 
   <title>Bienvenido '.$nombre.', bien hallado</title> 
</head> 
<body> 
<h1>Desea, comparte, comienza el viaje….</h1>
<p> 
<b>Estamos encantados de darte la bienvenida.</b>. A partir de ahora, tus datos de acceso serán los siguientes:<br><br>
usuario: '.$email.'<br>
contraseña: ********<br><br>

Si tuvieses cualquier duda o consulta, podrás ponerte en contacto con el administrador del sistema en info@wishup.es<br><br>

Saludos compañero.
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=charset=UTF-8\r\n"; 

//dirección del remitente 
$headers .= "From: Equipo WishUp <info@wishup.es>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: info@wishup.es\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: info@wishup.es\r\n"; 

mail($correo,$asunto,$cuerpo,$headers) 






?>

<SCRIPT LANGUAGE="javascript">
location.href = "wall.php";
</SCRIPT>