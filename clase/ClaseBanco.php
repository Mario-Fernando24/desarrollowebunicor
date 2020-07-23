   <?php

  class Banco extends Conectar{ // declaro mi programa
  
  //***** FUNCION PARA MOSTRAR LOS PROGRAMAS 
  	   public function get_Banco(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="select * from banco;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
      public function get_Banco_consulta(){
        $conectar=parent::conexion();
        parent::set_names();
        $sql="SELECT banco.id, banco.pregunta, usuario.nombre, banco.estado, banco.fecha FROM banco, usuario WHERE usuario.id=banco.id_ingreso;";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
      

      // *** FUNCION PARA AGREGAR UN PROGRAMA 
      public function agregar_banco(){
        $conectar=parent::conexion();
        parent::set_names();
         if(empty($_POST["pregunta"])){
           header("Location:".Conectar::ruta()."admin/banco/crear.php?m=1");
           exit();
        }
        $contra='activo';
         $conectar=parent::conexion();
        $sql="insert into banco values(null,?,?,?,now());";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $_POST["pregunta"]);
        $sql->bindValue(2, $_SESSION["id"]);
        $sql->bindValue(3, $contra);
        $sql->execute();
        $resultado=$sql->fetch(PDO::FETCH_ASSOC);
        
           header("Location:".Conectar::ruta()."admin/banco/index.php?m=2");
        
      }

       public function editar_banco(){

        $conectar=parent::conexion(); // hacemos nuestra conexion 
        parent::set_names(); // para no tener problemas con las tildes  

         if($_POST["estado"]=='activo'){
           $modificar='inactivo';
         }
         if ($_POST["estado"]=='inactivo') {
           $modificar='activo';
         }
        $sql="update banco set 
        estado=?
        where 
        id=?
        ";

        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$modificar);
        $sql->bindValue(2,$_POST["id"]);
        $sql->execute();

        $resultado=$sql->fetch(PDO::FETCH_ASSOC);
         header("Location:".Conectar::ruta()."admin/banco/index.php?m=3");
        exit();
    
      }
      
     }

     ?>