<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base_datos="sistema";
$con=new mysqli($servidor,$usuario,$clave,$base_datos);
//configurar los caracteres idioma español
mysqli_query($con,"SET NAMES utf8");
//ver si ocurrio algun problema en la conexion
if (mysqli_connect_errno()){
	printf ("Falló la conexión a la base de datos %sln", mysqli_connect_error());
	exit();
}


?>