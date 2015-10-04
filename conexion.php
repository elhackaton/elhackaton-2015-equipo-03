<?php 
	mysql_connect("localhost","root","") or die ('Ha fallado la conexión: '.mysql_error());
	mysql_select_db("dream_list")or die ('Error al seleccionar la Base de Datos: '.mysql_error());
	?>