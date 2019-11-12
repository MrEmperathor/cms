
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="assets/images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2"><?php echo $_SESSION["nombre"]?></span>
          <span class="text-secondary text-small"><?php echo $_SESSION["cargo"]?></span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?id=cms">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <?php if($_SESSION["cargo"] === 'administrador'){
  echo '
     <li class="nav-item">
      <a class="nav-link" href="/cms/?id=registro_admin">
        <span class="menu-title">Registrar Administradores</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/cms/?id=registro_vigilante">
        <span class="menu-title">Registrar Vigilantes</span>
        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/cms/?id=reportes">
        <span class="menu-title">Reportes Diarios</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/cms/?id=novedades">
        <span class="menu-title">Novedades</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>  
    </li>
    '; }
    if($_SESSION["cargo"]==='vigilante'){ 
      echo '
      <li class="nav-item">
      <a class="nav-link" href="/cms/?id=registro_usuario">
        <span class="menu-title">Registro Usuario</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/cms/?id=actualizar">
      <span class="menu-title">Actualizar Datos </span>  
      <i class="mdi mdi-medical-bag menu-icon"></i>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/cms/?id=ingreso">
      <span class="menu-title">Ingreso</span>  
      <i class="mdi mdi-medical-bag menu-icon"></i>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/cms/?id=salida_usuario">
      <span class="menu-title">Salida Usuario</span>  
      <i class="mdi mdi-medical-bag menu-icon"></i>
    </a>
    <li class="nav-item">
    <a class="nav-link" href="/cms/?id=listado_parqueado">
      <span class="menu-title">Usuarios Parqueados</span>  
      <i class="mdi mdi-medical-bag menu-icon"></i>
    </a>
    </li>
    
 
   
    '; } ?>
    
  </ul>
</nav>