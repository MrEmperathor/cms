<?php 
include "controlador/app.php";
 
    if(isset($_SESSION['nombre'])){
        include "vista/header.php";
        include "partials/_navbar.php"; 
        include "partials/_sidebar.php"; 
        echo '
        <div class="main-panel">
                 <div class="content-wrapper">';
        
                 $id = $_GET['id'];
                 if($id === 'registro_admin'){
                   include "vista/nuevo_administrador.php";
                 }elseif($id === 'registro_vigilante'){
                   include "vista/nuevo_vigilante.php";
                 }elseif($id === 'reportes'){
                   include "vista/listado_reportes.php";
                 }elseif($id === 'novedades'){
                   include "vista/novedades_vigilantes.php";
                 }elseif($id === 'registro_usuario'){
                   include "vista/usuarios/ingreso_usuario.php";
                 }  elseif($id === 'agregar_datos'){
                  include "vista/usuarios/agregar_datos.php";
                 }elseif($id === 'borrar_dato'){
                  include "vista/usuarios/borrar_dato.php";
                 }elseif($id === 'ingreso'){
                  include "vista/usuarios/ingreso/ingreso.php";
                 }elseif($id === 'ingreso_informacion'){
                  include "vista/usuarios/ingreso/informacion.php";
                 }elseif($id === 'salida_usuario'){
                  include "vista/usuarios/salida/salida.php";
                 }elseif($id === 'listado_parqueado'){
                  include "vista/usuarios/listado-parqueo/listado.php";
                 }elseif($id === 'actualizar'){
                  include "vista/usuarios/consulta.php";
                 }elseif($id === 'cms'){
                  include "vista/cms/index.php";
                 }elseif($id === 'listado'){
                  include "vista/usuarios/listado/registrados.php";
                 }
                 
                 
        echo '</div> </div></div>';
        include "vista/footer.php";        
    }else{
        header('location: /cms/login.php');
      }
    




?>
       