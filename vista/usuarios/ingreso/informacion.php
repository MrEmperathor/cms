<?php

include "controlador/app.php";
require('modelo/conexion.php');
 

$sql = 'SELECT * FROM `usuario_datos` WHERE usuario_id = "'. $_SESSION['ingreso_id'] .'" AND tipo = "BICICLETAS" ' ;
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $bicicletas = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $bicicletas = null;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hoy = date("Y-m-d H:i:s");
    $sql = 'INSERT INTO  `parqueos` (`id`, `usuario_id`, `horaingreso`, `horasalida`, `duracion`) VALUES (NULL, "'. $_SESSION['ingreso_id'].'", "'. $hoy .'","","")';
    if ($conexion->query($sql) === TRUE) {
        echo '<script>
              alert("Se a registrado el Ingreso al usuario");
               window.location="?id=cms=";
            </script>';
          die();
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          echo "Ocurrio un error, por favor vuelve a intentarlo";
      }

}



?>


<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body mt-5 mx-auto">
            <h4> Documento: <small class="text-muted"> <?php echo $_SESSION['ingreso_documento']; ?><span></small></h4>
            <h4> Nombre: <small class="text-muted"> <?php echo $_SESSION['ingreso_nombre']; ?> </small></h4>
            <form class="form-inline" method="post">
                <select class="form-control" form-group name="producto" required>
                    <option value="">Seleccine uno...</option>
                    <?php foreach ($bicicletas as $key => $item){
                                                echo $key;?>
                    <option value="<?php echo $item['id'] ?>">
                        <?php echo $item['dato'] ?> (<?php echo $item['color'] ?> disponibles)
                    </option>
                    <?php  }; ?>
                </select>
                <div class="col-md-12 mt-4 text-center">
                    <button type="submit" class="btn btn-primary">REGISTRAR INGRESO</button>
                </div>
            </form>
            <div style="text-align:center;padding:1em 0;">
                <h4><span style="color:gray;">Hora actual en</span><br />Bogotá, Colombia</a></h4> <iframe
                    src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FBogota"
                    width="100%" height="90" frameborder="0" seamless></iframe>
            </div>
        </div>
    </div>
</div>