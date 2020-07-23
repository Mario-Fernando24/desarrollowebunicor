<?php
require_once("clase/conexion.php");  // requery la clase de la conexion
require_once("clase/loguearse.php");  // llamo el archivo clase donde voy a loguarme
$login= new Loguearse(); // Instancio a usuario desde la Clases/ClaseDirector.php
 if(isset($_POST["grabar"]) and $_POST["grabar"]=="si"){  //ojo esto esta antes del submit
    $login->login();
    exit();
 }?>
  
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Desarrollo web</title>
  <!-- Custom fonts for this template-->
  <link href="jss/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="csss/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <!--******MENU DE OPCION PARA EL MENSAJE DE ELIMINACION  -->

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              

              <div class="col-lg-6 d-none d-lg-block"><img src="img/unicordoba.png" width="380px" height="560px" /></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">

                    <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                  </div>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <input type="text" name="usuario" class="form-control form-control-user" id="usuario" aria-describedby="emailHelp" placeholder="Usuario...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Contraseña...">
                                          <?php
                if(isset($_GET['jcbfrcuirhuijxni'])){
                  switch ($_GET['jcbfrcuirhuijxni']){
                   case '1':
                   ?>
                   <span class="help-block">
                   <strong style="color: red" class="col-lg-10">  Campos vacios!</strong>
                   </span>
                   <?php 
                   break;
                   case '2':
                   ?>
                   <span class="help-block">
                   <strong style="color: red" class="col-lg-10">  Contraseñas no coincide</strong>
                  </span>
                  <?php 
                  break;
                  }
                   }
                     ?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>
                    
                     <input type="hidden" name="grabar" value="si">
                        
                     <button type="submit" class="btn btn-danger btn-user btn-block">Entrar</button>

                    <hr>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="olvidaste.html">Olvidaste contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="registrar.html">Crear cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
   <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="jss/vendor/jquery/jquery.min.js"></script>
  <script src="jss/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="jss/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="jss/js/sb-admin-2.min.js"></script>

</body>

</html>
