<?php
require_once("../../clase/conexion.php"); 
 if(isset($_SESSION["id"]) && $_SESSION["tipo_persona"]==1){//<!-- si existe la variable session me muestra todo el  formulario-->
  require_once("../../clase/usuario.php"); // llamo al modulo usuario
  $usuario=new Usuario(); // ccreo mi instancia de usuario
 $datos=$usuario->get_Usuario();  // llamamos al metodo get_ususario de userModulo
  $estu=$usuario->get_profesores();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Desarrollo web</title>
    <!-- Custom fonts for this template-->
  <link href="../../csss/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../../csss/css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!--para el buscador-->
</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- inicio del menu lateral -->
     <?php require_once("../menu_lateral.php");?>
    <!-- final del menu lateral -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- menu de arriba -->
            <?php require_once("../../arriba.php");?>
          <!-- final de menu de arriba -->
        </nav>
        <div class="container-fluid">
             <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <div class="row">  <!--agregamos una fila -->
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">  <!-- colomna cuado el dispositivo seal grande tenga 8 columna aho de 8 y cuando el dispositovo sea pequeño que me muestre todo la pantalla completa-->
    <h3> <b>Listado de Profesores</b></h3>
    <!--aqui va el buscador-->
  </div>
</div>
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="table-responsive">
                         <div class="form-group">
                        <input type="text" class="form-control pull-right" style="width:20%" id="search" placeholder="Buscar...">
                        </div>
                      <table class="table-bordered table pull-right" id="mytable" cellspacing="0" style="width: 100%;">
                      <thead>
                      <th>Id</th>
                      <th>Tipo persona</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Num Identidad</th>
                      <th>Opciones</th>
                      </thead>
                      <?php for ($i=0; $i <sizeof($datos); $i++) { // instancie dato de clasePrograma
                        if ($datos[$i]["tipo_usuario"]==3){?>       
                      <tr>
                      <td><?php echo $datos[$i]["id"] ?></td>
                      <?php if ($datos[$i]["tipo_usuario"]==1) {?>
                        <td>Administrador</td>
                      <?php } ?>
                      <?php if ($datos[$i]["tipo_usuario"]==2) {?>
                        <td>Estudiante</td>
                      <?php } ?>
                      <?php if ($datos[$i]["tipo_usuario"]==3) {?>
                        <td>Profesor</td>
                      <?php } ?>
                      <td><?php echo $datos[$i]["nombre"] ?></td> 
                      <td><?php echo $datos[$i]["apellido"] ?></td>
                      <td><?php echo $datos[$i]["tipo_documento"]." ".$datos[$i]["num_identidad"] ?></td>   
                      <td>
                      <a href="editar.php?id=<?php echo $datos[$i]["id"];?>"><button class="btn btn-info">Editar</button></a>
                       <a href="Eliminar.php?id=<?php echo $datos[$i]["id"];?>"><button class="btn btn-danger">Eliminar</button></a>
                      </td>
                      </tr>
                       <?php
                     }
                       }?>
                      </table>
                      <?php if ($estu[0]["administradores"]==0) {
                       ?><h1>No hay profesores registrado</h1><?php 
                      }  ?> 
                      </div>
                      </div>
                      </div>
                        <!--Fin Contenido-->
                        </div>
                      </div>  
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div> 
      <br><br><br><br><br><br><br><br><br>
       <!--inicio del footer pie de pagina -->
     <?php require_once("../../pie_pagina.php");?>
       <!--final del pie de pagina -->
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!--inicio del modal--->
      <?php include("../../modal_salir.php");?>
  <!-- final del modal -->
   <script src="../../jss/vendor/jquery/jquery.min.js"></script>
  <script src="../../jss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../../jss/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../../jss/js/sb-admin-2.min.js"></script>
 <!--librerias para utilizar los componentes de javascript-->
</body>
</html>
<?php } else {
    header("Location:".Conectar::ruta()."index.php");
}?>


<script>
 // Write on keyup event of keyword input element
 $(document).ready(function(){
 $("#search").keyup(function(){
 _this = this;
 // Show only matching TR, hide rest of them
 $.each($("#mytable tbody tr"), function() {
 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
 $(this).hide();
 else
 $(this).show();
 });
 });
});
</script>
