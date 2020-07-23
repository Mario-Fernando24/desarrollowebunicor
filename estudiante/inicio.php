<?php
require_once("../clase/conexion.php"); 
 if(isset($_SESSION["id"]) && $_SESSION["tipo_persona"]==2){//<!-- si existe la variable session me muestra todo el  formulario-->
  ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Desarrollo web</title>
  <!-- Custom fonts for this template-->
  <link href="../csss/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../csss/css/cssEstudiante.css" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- inicio del menu lateral -->
     <?php require_once("menu_lateral.php");?>
    <!-- final del menu lateral -->
     <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
               <!-- menu de arriba -->
            <?php require_once("../arriba.php");?>
          <!-- final de menu de arriba -->
        </nav>
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">
         
               <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bienvenido Estudiante</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><h2><b><?php echo $_SESSION["nombre"] ?></b></h2></div>
                    </div>
                    <div class="col-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <div class="row">
          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-6 mb-4">
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer --><br><br><br><br><br><br><br><br><br>
      <!--inicio del footer pie de pagina -->
     <?php require_once("../pie_pagina.php");?>
       <!--final del pie de pagina -->
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
   <!--inicio del modal--->
      <?php require_once("../modal_salir.php");?>
  <!-- final del modal -->
  <!-- Bootstrap core JavaScript-->
  <script src="../jss/vendor/jquery/jquery.min.js"></script>
  <script src="../jss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../jss/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../jss/js/sb-admin-2.min.js"></script>
</body>
</html>
<?php } else {
    header("Location:".Conectar::ruta()."index.php");
}?>
