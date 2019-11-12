<?php
include "../modelo/conexion.php";

//consulta sql para mostrar el listado de los vigilantes registrados
$listado="select * from vigilante";

//muestra el listado
$mostrar=mysqli_query($conexion, $listado);
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sisconpark Vigilante</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
<h1><i>Listado vigilantes</i></h1>

	      <br><br><br><br><br><br><br><br><br><br>
		  <br><br><br><br><br><br><br><br><br><br>

<center>
<style>
</style>
<table border="1" style="font-size: 30px;">
<tr>
<th>Documento</th>
<th>Nombre</th>
<th>Correo</th>
<th>Teléfono</th>
<th colspan="2">Opciones</th>
</tr>
<?php
while ($array=mysqli_fetch_array($mostrar))
{
?>
<tr>
<td><?php echo $array["documento"];?></td>
<td><?php echo $array["nombre"];?></td>
<td><?php echo $array["correo"];?></td>
<td><?php echo $array["telefono"];?></td>
<td><a href="actualizar_vigilante.php?actualizar=<?php echo $array["documento"];?>">Modificar</a></td>
<td><a href="../modelo/borrar_vigilante.php?borrar=<?php echo $array["documento"];?>">Borrar</a></td>
</tr>
<?php
}
?>
</table>

</center>
</body>
<?php
if (isset($_REQUEST["actualizado"]))
{
	echo '<script>alert("Vigilante actualizado");</script>';
}
if (isset($_REQUEST["error"]))
{
	echo '<script>alert("Error al actualizar vigilante");</script>';
}
if (isset($_REQUEST["errorborrar"]))
{
	echo '<script>alert("Error al borrar vigilante");</script>';
}
?>
</html>