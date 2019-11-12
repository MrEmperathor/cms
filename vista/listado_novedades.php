<?php
include "../modelo/conexion.php";

//consulta sql para mostrar el listado las novedades

$listado="select * from novedades";

//muestra el listado
$mostrar=mysqli_query($conexion, $listado);
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sisconpark Administrador</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
    
<h1><i>Listado novedades</i></h1>

	      <br><br><br><br><br><br><br><br><br><br>
		  <br><br><br><br><br><br><br><br><br><br>
   
         
<center>
<table border="30" style="font-size: 30px;">    
<?php
while ($array=mysqli_fetch_array($mostrar))
{
?>
<tr> 
<th>Descripción</th>
<td><TD BGCOLOR="green"><?php echo $array["observacion"];?> </TD>   </td>
</tr>
<?php
}
?>
</table>

</center>
</body>
        
</html>