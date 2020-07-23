<?php

  class Usuario extends Conectar{ // declaro mi programa
  
  //***** FUNCION PARA MOSTRAR LOS PROGRAMAS 
  	   public function get_Usuario(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="select * from usuario;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
        public function get_admin(){
         $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT count(*) as administradores FROM usuario where usuario.tipo_usuario=1;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
       public function get_estudiante(){
         $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT count(*) as administradores FROM usuario where usuario.tipo_usuario=2;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }

       public function get_profesores(){
         $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT count(*) as administradores FROM usuario where usuario.tipo_usuario=3;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
      
      // FUNCION PARA MOSTRAR LOS ROLES QUE TENGO DISPONIBLE EN LA BASE DE DATO
        public function get_Roles(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="select * from roles;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }

// *** FUNCION PARA AGREGAR UN PROGRAMA 
  public function agregar_usuario(){
        $conectar=parent::conexion();
        parent::set_names();

        if($_POST["password"] !== ($_POST["repi"])){
          header("Location:".Conectar::ruta()."admin/usuario/crear.php?m=3");
           exit();
        }
         if(empty($_POST["tipo_usuario"]) or empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["tipo_documento"]) or empty($_POST["num_identidad"]) or empty($_POST["usuario"]) or empty($_POST["password"]) or empty($_POST["repi"])){
           header("Location:".Conectar::ruta()."admin/usuario/crear.php?m=1");
           exit();
        }
        
         $conectar=parent::conexion();
        $sql="insert into usuario values(null,?,?,?,?,?,?,?);";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $_POST["tipo_usuario"]);
        $sql->bindValue(2, $_POST["nombre"]);
        $sql->bindValue(3, $_POST["apellido"]);
        $sql->bindValue(4, $_POST["tipo_documento"]);
        $sql->bindValue(5, $_POST["num_identidad"]);
        $sql->bindValue(6, $_POST["usuario"]);
        $contra=password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sql->bindValue(7, $contra);
        $sql->execute();
        $resultado=$sql->fetch(PDO::FETCH_ASSOC);
        header("Location:".Conectar::ruta()."admin/usuario/index.php?m=2");
        
      }
                 ///ELIMINAR USUARIO
       public function eliminar_Usuario($id_usuario){  // paso el id por parametro
          $conectar=parent::conexion();
          parent::set_names();
          $sql="delete from usuario where id=?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$id_usuario);
          $sql->execute();
          return $resultado=$sql->fetch(PDO::FETCH_ASSOC);
      }


          //Funcion para pasar el id del ususario que se va a editar
      public function get_usuario_por_id($id_usuario){
        $conectar=parent::conexion();// hacemos nuestra conexion
        parent::set_names(); // este es para no tener probllemas con las tilde 
        $sql="select * from usuario where id =?";
        $sql=$conectar->prepare($sql); //HACE UNA CONSULTA EN TODOS LOS CAMPOS
        $sql->bindValue(1,$id_usuario);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }


         public function editar_usuario(){

        $conectar=parent::conexion(); // hacemos nuestra conexion 
        parent::set_names(); // para no tener problemas con las tildes  

         if($_POST["password"] !== ($_POST["repi"])){
          header("Location:".Conectar::ruta()."admin/usuario/editar.php?id=".$_POST["id"]."&m=3");
           exit();
        }
         if(empty($_POST["tipo_usuario"]) or empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["tipo_documento"]) or empty($_POST["num_identidad"]) or empty($_POST["usuario"]) or empty($_POST["password"]) or empty($_POST["repi"])){
           header("Location:".Conectar::ruta()."admin/usuario/editar.php?id=".$_POST["id"]."&m=1");
           exit();
           exit();
        }
       
        $sql="update usuario set 
        
        tipo_usuario=?,
        nombre=?,
        apellido=?,
        tipo_documento=?,
        num_identidad=?,
        usuario=?,
        password=?
        where 
        id=?
        ";

        $sql=$conectar->prepare($sql);

        $sql->bindValue(1,$_POST["tipo_usuario"]);
        $sql->bindValue(2,$_POST["nombre"]);
        $sql->bindValue(3,$_POST["apellido"]);
        $sql->bindValue(4,$_POST["tipo_documento"]);
        $sql->bindValue(5,$_POST["num_identidad"]);
        $sql->bindValue(6,$_POST["usuario"]);
        $contra=password_hash($_POST['password'], PASSWORD_BCRYPT);
        $sql->bindValue(7,$contra );
        $sql->bindValue(8,$_POST["id"]);
        $sql->execute();

        $resultado=$sql->fetch(PDO::FETCH_ASSOC);

         header("Location:".Conectar::ruta()."admin/usuario/index.php?m=3");
        exit();
    
      }  
     }

     ?>