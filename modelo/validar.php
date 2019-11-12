<?php

include "../controlador/app.php";

$documento=$_POST['documento'];
$contrasena=$_POST['contrasena'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost", "root", "", "bikes_db");
//verifica si el usuario es usuarios
$consulta="SELECT * FROM usuarios WHERE documento=$documento and contrasena='$contrasena'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0) {
	
	$array=mysqli_fetch_array($resultado);
	$_SESSION["validar"]="true";
	$_SESSION["cedula"]= $array["documento"];
	$_SESSION["nombre"]= $array["nombre"].' '.$array["apellido"];
	$_SESSION["apellido"]= $array["apellido"];
	$_SESSION["correo"]= $array["correo"];
	$_SESSION["cargo"]=  $array['rol'];
	
    header("location:../?id=dashboard");
}else{
		//muestra error de autentificacion
		header("location:../index.php?error");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>