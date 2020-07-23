
<?php

  class Loguearse extends Conectar{ // declaro mi class usuario

      public function login(){  // declaro mi funcion login para loguearme
 
         $conectar=parent::conexion(); // hago mi conexion
         parent::set_names(); // este es para no tener problema con las tildes que esta en conf

         if(empty($_POST["usuario"]) and empty($_POST["password"])){ // si los campos del index estan vacios 

           header("Location:".Conectar::ruta()."index.php?jcbfrcuirhuijxni=1"); // me devuelve de una al inicio
           exit();
         }
         
        //hago mi consulta para poder llamar al usuario y password para compararlos
        $sql="select * from usuario where usuario=?"; // si no hacemos nuestra consulta

         $sql=$conectar->prepare($sql);  // 

         $sql->bindValue(1, $_POST["usuario"]);  
         $sql->execute();
         $resultado=$sql->fetch(PDO::FETCH_ASSOC);

         if(is_array($resultado)==true and count($resultado)>=1){  //hago mi condicion si el resultado de la consulta es igual a true y si resultado es mayor o igual a 1
          $cont=$resultado["password"];
           
           if (password_verify($_POST["password"], $cont)) {
             
           $_SESSION["id"]=$resultado["id"]; // si la session id es igual al id en la base de datos
           $_SESSION["nombre"]=$resultado["nombre"];// la session del nombre del estudiante para mostrarlo en la session al lado de bienvenida
           $_SESSION["apellido"]=$resultado["apellido"];// la session del nombre del estudiante para mostrarlo en la session al lado de bienvenida
           $_SESSION["tipo_persona"]=$resultado["tipo_usuario"];// la session Para mostrar la Foto
           if ($_SESSION["tipo_persona"]==1) {
            header("Location:".Conectar::ruta()."admin/inicio.php"); //si cumple la primera condicion logueamos al admin
           exit();
           }
            if ($_SESSION["tipo_persona"]==2) {
            header("Location:".Conectar::ruta()."estudiante/inicio.php"); //si cumple la primera condicion logueamos al admin
           exit();
           }     
                
         }else{
           
           header("Location:".Conectar::ruta()."index.php?jcbfrcuirhuijxni=2"); // me devuelve de una al inicio
        
          }
         //  header("Location:".Conectar::ruta()."index.php?jcbfrcuirhuijxni=2"); // me devuelve de una al inicio
         }
               header("Location:".Conectar::ruta()."index.php?jcbfrcuirhuijxni=2"); // me devuelve de una al inicio
        }
      }