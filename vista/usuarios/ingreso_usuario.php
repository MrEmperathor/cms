<?php
  require('modelo/conexion.php');
$show = TRUE;
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "INSERT INTO `usuarios` (`id`, `rol`, `documento`, `nombre`, `nombre2`, `apellido`, `apellido2`, `contrasena`, `genero`, `correo`) VALUES (NULL, 'usuario', '". $_POST["documento"] ."', '".$_POST["primernombre"]."', '".$_POST["segundonombre"]."', '".$_POST["primerapellido"]."', '".$_POST["segundoapellido"]."', '', '".$_POST["genero"]."', '".$_POST["correo"]."')";
   
    if ($conexion->query($sql) === TRUE) {
      echo '<script>
			alert("Usuario Registrado Complete Datos Adicionales");
 			window.location="?id=agregar_datos&usuario='.$_POST["documento"].'";
          </script>';
        die();
    } else {
       
        echo '<div class="alert alert-light alert-dismissible fade show" role="alert">
        <strong>USUARIO YA EXISTENTE!</strong> valide en el modulo actualizar datos para poder ver mas información.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
}

?>

<div class="container">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Registro usuario</h4>
        <p class="card-description">Agrega Información Basica</p>
        <form method="post" class="form-register">
        <div class="form-group">
            <label>Documento </label>
            <input type="number" class="form-control" name="documento" placeholder="Cedula" require>
          </div>
          <div class="form-group">
            <label>Primer Nombre</label>
            <input type="text" class="form-control" name="primernombre" placeholder="Primer Nombre" require>
          </div>
          <div class="form-group">
            <label>Segundo Nombre</label>
            <input type="text" class="form-control" name="segundonombre" placeholder="Segundo Nombre" require>
          </div>
          <div class="form-group">
            <label>Primer Apellido</label>
            <input type="text" class="form-control" name="primerapellido" placeholder="Primer Apellido" require>
          </div>
          <div class="form-group">
            <label>Segundo Apellido</label>
            <input type="text" class="form-control" name="segundoapellido" placeholder="Primer Apellido" require>
          </div>
          <div class="form-group">
            <label>Genero</label>
            <select class="form-control" name="genero">
              <option>Masculino</option>
              <option>Femenino</option>
            </select>
          </div>
          <div class="form-group">
            <label>Dirección de Correo</label>
            <input type="email" class="form-control" name="correo" placeholder="Email">
          </div>


          <button type="submit" class="btn btn-gradient-primary mr-2">Registro</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>

    </body>
    <?php
if (isset($_REQUEST["error"]))
{
	//muestra el mensaje error al registrar el ingreso del usuario
	 echo '<script>alert("Error al registrar el ingreso del usuario");</script>';	
}

?>


    </html>