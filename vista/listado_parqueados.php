<?php
include "../modelo/conexion.php";

//consulta sql para mostrar el listado de los vehiculos parqueados
$listado="select * from usuario";

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
<h1><i>Vehiculos parqueados</i></h1>

	      <br><br><br><br><br><br><br><br><br><br>
		  <br><br><br><br><br><br><br><br><br><br>

<center>
<style>
</style>
<table border="1" style="font-size: 25px;">
<tr>
<th>Documento</th>
<th>Nombre</th>
<th>Vehiculo</th>
<th>Placa</th>
<th>Hora ingreso</th>
</tr>
<?php
while ($array=mysqli_fetch_array($mostrar))
{
?>
<tr>
<td><?php echo $array["documento"];?></td>
<td><?php echo $array["nombre"];?></td>
<td><?php echo $array["vehiculo"];?></td>
<td><?php echo $array["placa"];?></td>
<td><?php echo $array["horaingreso"];?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>