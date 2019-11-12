<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Sisconpark Vigilante</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
  </head>
  <body>
      <h1><i>Salida Usuario</i></h1> 
	 <form action="../modelo/actualizar_usuario.php" method="post" class="form-register" onsubmit="return validar();">
       <section class="start-login">
	      <br><br><br><br><br><br><br><br><br><br>
		  <br><br><br><br><br><br><br><br><br><br>
		  <input type="text" name="documento" id="documento" placeholder="Documento" required>
		  <input type="text" name="placa" id="placa" placeholder="Placa" required>
		  <br>
		 <div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;"
		 href="https://www.zeitverschiebung.net/en/country/co"><span style="color:gray;"><iframe 
		 src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=America%2FBogota" 
		 width="100%" height="90" frameborder="0" seamless></iframe> </div>
 
	 <input type="submit" value="Enviar" class="btn-enviar" required>
	 <button onclick="window.location.href='inicio_vigilante.php'">
	 Inicio
	 </button>
</form>	 
</body>
 <?php
if (isset($_REQUEST["error"]))
{
	//muestra el mensaje error al registrar la salida del usuario
	 echo '<script>alert("Error al registrar la salida del usuario");</script>';	
}
if (isset($_REQUEST["error2"]))
{
	//muestra el mensaje error no conincide el documento con la placa
	 echo '<script>alert("el documento o la placa no coincide con los datos del usuario");</script>';	
}
if (isset($_REQUEST["actualizado"]))
{
	//muestra el mensaje registrada la salida del vehiculo
	 echo '<script>alert("se ha registrado la salida del vehiculo");</script>';
}
?>
</html>










