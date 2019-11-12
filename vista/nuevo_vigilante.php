<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sisconpark Administrador</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
    
  <body>
      <h1><i>Registrar Vigilantes</i></h1> 
	  <form action="../modelo/registrar_vigilante.php" method="post" class="form-register" onsubmit="return validar();">
       <section class="start-login">
	      <br><br><br><br><br><br><br><br><br><br>
		  <br><br><br><br><br><br><br><br><br><br>
		  <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
		  <input type="text" name="documento" id="documento" placeholder="Documento" required>
		  <input type="text" name="correo" id="correo" placeholder="Correo Electronico" required>
		  <input type="text" name="telefono" id="telefono" placeholder="Telefono" required>
		  <input type="password" name="contrasena" id="contrasena" placeholder="Adjudicar contrasena" required>
		  <br>
		 <div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;"
		 href="https://www.zeitverschiebung.net/en/country/co"><span style="color:gray;"><iframe 
		 src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=America%2FBogota"
		 width="100%" height="90" frameborder="0" seamless></iframe> </div>	 	 
	<input type="submit" value="Enviar" class="btn-enviar" required>
    <button onclick="window.open('listado_vigilantes.php')" class="btn-enviar" required>
    Buscar
	</button>
    <button onclick="window.location.href='inicio_administrador.php'" class="btn-enviar">
    Inicio
	</button>		
    </form>	
</body>
<?php
//muestra el mensaje error al no registrar el vigilante
if (isset($_REQUEST["error"]))
{
 echo '<script>alert("Error al registrarse");</script>';
}
?>
</html>














