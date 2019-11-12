<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sisconpark Vigilante</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="logo"><h1><i>Sisconpark</i></h1></div>
     <section class="start-login">
     <form action="../controlador/logout.php" method="post" class="form-register">
    <div>
	<input type="button" value="Ingreso Usuario" class="btn-enviar" onclick="window.location.href='ingreso_usuario.php'" required><br><br><br>
	<input type="button" value="Salida Usuario" class="btn-enviar" onclick="window.location.href='salida_usuario.php'" required>
    <br><br><br><br><br><br><br><br><br><br>
    <input type="button" value="Parqueados" class="btn-enviar" onclick="window.open('listado_parqueados.php')" required>
	<input type="button" value="Cobrados" class="btn-enviar" onclick="window.open('listado_cobrados.php')" required>
	<input type="button" value="Observaciones" class="btn-enviar" onclick="window.location.href='novedades_vigilante.html'" required>
	 <input type="submit" value="Cerrar Sesión" class="btn-enviar" required>
    </div>
  </form>
		  <div class="hexagons">
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
        </div>  
  
</body>
<?php
if (isset($_REQUEST["registrado"]))
{
	//muestra el mensaje ingreso usuario registrado
	 echo '<script class="color">alert("Usuario registrado exitosamente");</script>';	
}
if (isset($_REQUEST["actualizado"]))
{
	//muestra el mensaje registrada la salida del vehiculo
	 echo '<script class="color">alert("registrada la salida del vehiculo");</script>';	
}
?>
</html>














