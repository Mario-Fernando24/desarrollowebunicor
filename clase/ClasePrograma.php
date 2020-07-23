   <?php

  class Programa extends Conectar{ // declaro mi programa
  
  //***** FUNCION PARA MOSTRAR LOS PROGRAMAS 
  	   public function get_Programa(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="select * from programa;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
    

// *** FUNCION PARA AGREGAR UN PROGRAMA 
  public function agregar_programas(){
        $conectar=parent::conexion();
        parent::set_names();
         if(empty($_POST["nombre"])){
           header("Location:".Conectar::ruta()."admin/programas/crear.php?m=1");
           exit();
        }
        $contra='activo';
         $conectar=parent::conexion();
        $sql="insert into programa values(null,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $_POST["nombre"]);
        $sql->bindValue(2, $contra);
        $sql->execute();
        $resultado=$sql->fetch(PDO::FETCH_ASSOC);
        header("Location:".Conectar::ruta()."admin/programas/index.php?m=2");
        
      }
                 ///ELIMINAR USUARIO
       public function eliminar_Programa($id_usuario){  // paso el id por parametro
          $conectar=parent::conexion();
          parent::set_names();
          $sql="delete from programa where id=?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$id_usuario);
          $sql->execute();
          return $resultado=$sql->fetch(PDO::FETCH_ASSOC);
      }


          //Funcion para pasar el id del ususario que se va a editar
      public function get_programa_por_id($id_usuario){
        $conectar=parent::conexion();// hacemos nuestra conexion
        parent::set_names(); // este es para no tener probllemas con las tilde 
        $sql="select * from programa where id =?";
        $sql=$conectar->prepare($sql); //HACE UNA CONSULTA EN TODOS LOS CAMPOS
        $sql->bindValue(1,$id_usuario);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }



         public function editar_programa(){

        $conectar=parent::conexion(); // hacemos nuestra conexion 
        parent::set_names(); // para no tener problemas con las tildes  

          if(empty($_POST["nombre"])){
           
           header("Location:".Conectar::ruta()."admin/programas/editar.php?id=".$_POST["id"]."&m=1");
           exit();
        }
       
        $sql="update programa set 
        
        nombre=?
        where 
        id=?
        ";

        $sql=$conectar->prepare($sql);

        $sql->bindValue(1,$_POST["nombre"]);
        $sql->bindValue(2,$_POST["id"]);
        $sql->execute();

        $resultado=$sql->fetch(PDO::FETCH_ASSOC);
        header("Location:".Conectar::ruta()."admin/programas/index.php?id=".$_POST["id"]."&m=2");
        exit();
    
      }

  
     }

     ?>