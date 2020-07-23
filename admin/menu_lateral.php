   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
       
        <div class="sidebar-brand-text mx-3"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo Conectar::ruta();?>admin/inicio.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Menu</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Usuarios</span>
        </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Selecciona:</h6>
        <a class="collapse-item" href="<?php echo Conectar::ruta();?>admin/usuario/index.php">Administradores</a>
        <a class="collapse-item" href="<?php echo Conectar::ruta();?>admin/usuario/estudiante.php">Estudiantes</a>
        <a class="collapse-item" href="<?php echo Conectar::ruta();?>admin/profesores/index.php">Profesores</a>
          </div>
        </div>
      </li>


        <hr class="sidebar-divider">
       <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo Conectar::ruta();?>admin/programas/index.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Programas</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo Conectar::ruta();?>admin/cursos/index.php">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Cursos</span>
        </a>
      </li>
       <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo Conectar::ruta();?>admin/matriculas/index.php">
          <i class="fa fa-circle" aria-hidden="true"></i>
          <span>Matricular curso</span>
        </a>
      </li>
       <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo Conectar::ruta();?>admin/banco/index.php">
          <i class="fa fa-save" aria-hidden="true"></i>
          <span>Banco Pregunta</span>
        </a>
      </li>
  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul> 