<?php
include "../modelo/conexion.php";

//consulta sql para mostrar los datos del vigilante a actualizar
$actualizar="select * from vigilante where documento=$_REQUEST[actualizar]";

//muestra el listado
$mostrar=mysqli_query($conexion, $actualizar);

//toma los datos del vigilante
$array=mysqli_fetch_array($mostrar);
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sisconpark Vigilante</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
<h1><i>Actualizar vigilante</i></h1>

	      <br><br><br><br><br><br><br><br><br><br>
		  <br><br><br><br><br><br><br><br><br><br>

<center>

<form action="../modelo/modificar_vigilante.php" method="post">
<table border="1" style="font-size: 30px;">
<tr>
<td>Documento</td>
<td><input type="text" name="documento" value="<?php echo $array["documento"]?>" readonly></td>
</tr>
<tr>
<td>Nombre</td>
<td><input type="text" name="nombre" value="<?php echo $array["nombre"]?>"></td>
</tr>
<tr>
<td>Correo</td>
<td><input type="text" name="correo" value="<?php echo $array["correo"]?>"></td>
</tr>
<tr>
<td>Teléfono</td>
<td><input type="text" name="telefono" value="<?php echo $array["telefono"]?>"></td>
</tr>
<tr>
<td>Contraseña</td>
<td><input type="text" name="contrasena" value="<?php echo $array["contrasena"]?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="enviar" value="enviar" style="width:100px; height:30	px; font-size: 30px;"></td>
</tr>
</table>
</form>
</center>
</body>
</html>