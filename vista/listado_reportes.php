<div class="col-md-12 text-center my-4">
<form action="" method="post">
<button type="submit" class="btn btn-dark btn-fw"  name="diario">Diario</button>
<button type="submit" class="btn btn-dark btn-fw"  name="semanal">Semanal</button>
<button type="submit" class="btn btn-dark btn-fw"  name="mensual">Mensual</button>
</form>
</div>

<?php

	
include "modelo/conexion.php";

//consulta para el reporte diario
if (isset($_POST["diario"]))
{
	$reporte="Reporte diario";
	$listado="select * from cobrados where horasalida between curdate() and now() and horasalida is not null";
	//muestra el listado
	$mostrar=mysqli_query($conexion, $listado);
	
}

//consulta para el reporte semanal
if (isset($_POST["semanal"]))
{
	$reporte="Reporte semanal";
	$listado="select * from cobrados 
where horasalida>=SUBDATE(curdate(),WEEKDAY(curdate()))
and horasalida<=ADDDATE(curdate(),7-WEEKDAY(curdate())) and horasalida is not null";
	//muestra el listado
	$mostrar=mysqli_query($conexion, $listado);
}

//consulta para el reporte mensual
if (isset($_POST["mensual"]))
{
	$reporte="Reporte mensual";
	$listado="select * from cobrados where horasalida>=DATE_FORMAT(CURDATE(), '%Y-%m-01') and horasalida<=now() and horasalida is not null";
	//muestra el listado
	$mostrar=mysqli_query($conexion, $listado);
}
?>



	    
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $reporte;?></h4>
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
						  <th> Usuario </th>
						  <th> Documento </th>
                          <th> Nombre </th>
                          <th> Ingreso </th>
                          <th> Duracion </th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php

			$array=mysqli_fetch_array($mostrar);
			if($array>0){echo "si hay";}else{ echo "no hay"; }
			while ($array=mysqli_fetch_array($mostrar)){  
				
				if($array["genero"]=='hombre'){ 
					 $poster= 'assets/images/faces-clipart/pic-1.png';
					}else{
						 $poster= 'assets/images/faces-clipart/pic-3.png';
				}
				
				
				echo '
					<tr>
                          <td class="py-1">
                            <img src="'.$poster.'"  alt="image" />
                          </td>
                          <td>'.$array["documento"].'</td>
                          <td>
						  ' . $array["nombre"] .' 
                          </td>
                          <td>' .$array["horaingreso"]. ' </td>
                          <td>'. $array["duracion"]. ' </td>
					</tr>
					';
			}?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


<?php
/*
 $array["documento"]
 $array["nombre"]
 $array["vehiculo"]
$array["placa"]
 $array["horaingreso"]
$array["horasalida"]
 $array["duracion"]
 */
 ?>
