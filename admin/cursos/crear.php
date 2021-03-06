<?php
require_once("../../clase/conexion.php"); 
if(isset($_SESSION["id"]) && $_SESSION["tipo_persona"]==1){//<!-- si existe la variable session me muestra todo el  formulario-->
    require_once("../../clase/ClaseDocente.php"); // llamo al modulo usuario
  $doce=new Docente(); // ccreo mi instancia de usuario
 $datos_docente=$doce->get_Docente();  // llamamos al metodo get_ususario de userModulo

  require_once("../../clase/ClasePrograma.php"); // llamo al modulo usuario
  $usuario=new Programa(); // ccreo mi instancia de usuario
 $datoss=$usuario->get_Programa();  // llamamos al metodo get_ususario de userModulo


if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){ // que si se enviaron los datos
  require_once("../../clase/ClaseCurso.php"); // llamo al modulo usuario
  $usuario=new Curso(); // ccreo mi instancia de usuario
  $usuario->agregar_curso(); // llamo al metodo de agregar programa por medio de mi instancia
  exit(); // cierro
}
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
         <?php
   if(isset($_GET['m'])){
    switch ($_GET['m']){
      case '1':
        ?>
        <div class="alert alert-danger">
         <strong>Por Favor!</strong>Llenar Los Campos
        </div>
        <?php 
        break;
      case '2':
        ?>
        <div class="alert alert-success">
        <strong>Exitoso!</strong> USUARIO CREADO
         </div>  
        <?php
        break;
    } }
  ?> 
                <h3 class="box-title"><b>Crear Materia</b></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              
                      <form action="" method="post">
                                 
                      <div class="panel-body"  id="app">
                      <div class="row">

                      <div class="col-lg-6 col-md-6 col-xs-12">
                      <div class="form-group">
                          <label>Programa</label>
                      <select name="id_programa" class="form-control" v-model="tipo_usuario">
                        <option  disabled="">seleccione programa</option>
                         <?php for($i=0; $i<sizeof($datoss); $i++){ ?>
                                        <option value="<?php echo $datoss[$i]["id"] ?>"> <?php echo $datoss[$i]["nombre"]; ?> </option>
                                       <?php } ?>
                     </select>
                     <span class="help-block">
                                        <strong style="color:red">{{ rolesss }}</strong>
                            </span>
                      </div>

                       <div class="form-group">
                          <label>Docente</label>
                      <select name="id_docente" class="form-control">
                        <option  disabled="">seleccione docente</option>
                         <?php for($i=0; $i<sizeof($datos_docente); $i++){ ?>
                                        <option value="<?php echo $datos_docente[$i]["id"] ?>"> <?php echo $datos_docente[$i]["nombre"].' '.$datos_docente[$i]["apellido"]; ?> </option>
                                       <?php } ?>
                     </select>
                       </div>
                      </div>

                    </div>
                      <div class="col-lg-6 col-md-6 col-xs-12">
                          <div class="form-group">
                           <label for="nombre">Nombre Materia</label>
                           <input type="text" name="nombre" class="form-control" v-model="nombre"   placeholder="Nombre...">
                           <span class="help-block">
                                        <strong style="color:red">{{ valnombre }}</strong>
                            </span>
                          </div>
                        </div>

                      <input type="hidden" name="grabar" value="si">

                      <div class="col-lg-6 col-md-6 col-xs-12">
                          <div class="form-group" v-show="valida === true">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                          </div>
                      </div>
                     </div> 
                        </form>
                              <!--Fin Contenido-->
                           </div>
                        </div>
                        
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </section>      </div>
      <br><br><br><br><br><br><br><br><br>
             <!--inicio del footer pie de pagina -->
     <?php require_once("../../pie_pagina.php");?>
       <!--final del pie de pagina -->
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<!--inicio del modal--->
      <?php require_once("../../modal_salir.php");?>
  <!-- final del modal -->
   <script src="../../jss/vendor/jquery/jquery.min.js"></script>
  <script src="../../jss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../../jss/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../../jss/js/sb-admin-2.min.js"></script>
 <!--librerias para utilizar los componentes de javascript-->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="componente/formu.js"></script>
</body>
</html>
<?php } else {
    header("Location:".Conectar::ruta()."index.php");
}?>
