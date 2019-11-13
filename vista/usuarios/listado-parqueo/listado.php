<?php 
include "controlador/app.php";
require('modelo/conexion.php');
 


$sql = 'SELECT * FROM `parqueos` LEFT JOIN `usuarios` ON parqueos.usuario_id = usuarios.id   WHERE duracion = ""';
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $enparqueadero = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $enparqueadero = null;
}

?>


<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Listado de usuarios en parqueadero</h4>
                   
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Avatar </th>
                          <th> Nombre</th>
                          <th> Identificación </th>
                          <th> Genero </th>
                          <th> Fecha de Ingreso </th>
                        </tr>
                      </thead>
                      <tbody>
                <?php 
                if($enparqueadero == NULL){
                  echo 'NO HAY NINGUN USUARIO ACTUALMENTE EN  EL PARQUIADERO';
                }else{
                foreach($enparqueadero as $key => $item){
                   
                   if($item["genero"]=="MASCULINO"){
                         $img = 'assets/images/faces-clipart/pic-1.png';
                    }else{
                         $img = 'assets/images/faces-clipart/pic-2.png';
                        }

                 echo ' <tr>
                          <td class="py-1">
                            <img src="'.$img.'" alt="image" />
                          </td>
                          <td>'.$item["nombre"].' '.$item["apellido"].'</td>
                          <td>'.$item["documento"].'</td>
                          <td>'.$item["genero"].' </td>
                          <td>'.$item["horaingreso"].' </td>
                        </tr>';
                        }
                      }

                    ?>
                    </table>
                  </div>
                </div>
              </div>