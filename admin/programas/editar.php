<?php
require_once("../../clase/conexion.php"); 
if(isset($_SESSION["id"]) && $_SESSION["tipo_persona"]==1){//<!-- si existe la variable session me muestra todo el  formulario-->
   require_once("../../clase/ClasePrograma.php"); // llamo al modulo usuario   
    $usuario=new Programa(); // LLAMAMOS LA CLASE DE USUARIO EN EL CUAL SE ENCUNTRA LA FUNCION get_roles

    $datos=$usuario->get_programa_por_id($_GET["id"]); // recibo el id por el parametro
     

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){      
      $usuario->editar_programa();
       exit();
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
        <strong>Exitoso!</strong> Actualizado con exito
         </div>  
        <?php
        break;
        
    } }
  ?> 
                <h3 class="box-title"><b>Editar Programa</b></h3>
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
                           <label for="nombre">Nombre</label>
                           <input type="text" name="nombre" class="form-control" value="<?php echo $datos[0]["nombre"];?>" value="" placeholder="Apellido...">
                           <span class="help-block">
                                        <strong style="color:red"></strong>
                            </span>
                         </div>

                         <div class="col-lg-6 col-md-6 col-xs-12">
                          <div class="form-group">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                          </div>
                          </div>

                        </div>
                          
                           <input type="hidden" name="grabar" value="si">
                            
                            <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
                      </div>
                     </div> 
                               </form>
                               
                            <a href="index.php"><button class="btn btn-success">Atras</button> </a>
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
  <script src="componente/formularios.js"></script>
</body>
</html>
<?php } else {
    header("Location:".Conectar::ruta()."index.php");
}?>
