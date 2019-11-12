<?php
require('modelo/conexion.php');
$sql= 'SELECT count(*) AS conteo FROM usuarios';

$result = $conexion->query($sql);
if ($result->num_rows>0) {
    $cliente = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $cliente = null;
}

$sql= 'SELECT count(*) AS conteo FROM parqueos WHERE duracion = "" ';
$result = $conexion->query($sql);
if ($result->num_rows>0) {
    $parqueo = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo 'error';
    $parqueo = null;
}

$sql= 'SELECT count(*) AS conteo FROM parqueos WHERE duracion <> "" ';
$result = $conexion->query($sql);
if ($result->num_rows>0) {
    $parqueados = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo 'error';
    $parqueados = null;
}

?>
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                 <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body my-2 ">
                        <img src="http://www.bootstrapdash.com/demo/purple/jquery/template/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                        <h4 class="font-weight-normal mb-3">Usuarios Registrados <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                        <h2 class="mb-5"><?php echo $cliente[0]['conteo']; ?></h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="http://www.bootstrapdash.com/demo/purple/jquery/template/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                            <h4 class="font-weight-normal mb-3">Usuarios en Parking <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i></h4>
                            <h2 class="mb-5"><?php echo $parqueo[0]['conteo']; ?></h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="http://www.bootstrapdash.com/demo/purple/jquery/template/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Usuarios Salientes <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php echo $parqueados[0]['conteo']; ?></h2>
                    
                  </div>
                </div>
              </div>           
         </div>
    </div>