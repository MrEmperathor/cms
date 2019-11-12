<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Administrador</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="logo">
    <h1><i>Panel Administrador</i></h1>
  </div>
  <section class="start-login">
    <form action="../controlador/logout.php" method="post" class="form-register">
      <div>
        <input type="button" value="Registrar administradores" class="btn-enviar"
          onclick="window.location.href='nuevo_administrador.php'">
        <input type="button" value="Registrar vigilantes" class="btn-enviar"
          onclick="window.location.href='nuevo_vigilante.php'" required>
        <input type="button" value="Reportes diarios - semanales - mensuales" class="btn-enviar"
          onclick="window.location.href='reportes.html'" required>
        <br><br><br><br><br><br><br><br><br><br>
        <input type="button" value="Novedades" class="btn-enviar"
          onclick="window.location.href='novedades_administrador.html'" required>
        <input type="submit" value="Cerrar Sesion" class="btn-enviar" required>
      </div>
    </form>

</body>
<?php
if (isset($_REQUEST["registrado"]))
{
	//muestra el mensaje usuario registrado
	 echo '<script class="color">alert("Usuario registrado exitosamente");</script>';	
}
?>

</html>