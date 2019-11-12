<?php
include "controlador/app.php";
require('modelo/conexion.php');

$datos =false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    echo '<script>
			alert("Usuario Registrado Complete Datos Adicionales");
 			window.location="?id=agregar_datos&usuario='.$_POST["documento"].'";
          </script>';

    
}


?>


<div class="container ">
            <div class="content-wrapper">
                    <div class="col-md-12 text-center p-4">
                        <a class="btn btn-danger" href="index.php?id=cms">Volver</a>
                    </div>
                    <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body mt-5 mx-auto">
                            <form class="form-inline" method="post">
                                    <div class="form-group p-3 ">
                                        <span>Documento: <span>
                                        <input type="number" class="form-control p-4" name="documento" placeholder="Cedula" require>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">BUSCAR</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div> 
                    
                    
                        </div>
            </div>
    </div>   
</div>
