<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/config/Database.php");

class Usuarios1
{

     
     public static function log($email,$contrasena)
     {
      $queryDataBase= "select u.id, u.dni, u.nombre, u.correo, u.contrasena, u.direccion, 
      u.fechaNacimiento, u.rol_id, r.rol  from usuarios u  inner join roles r  on u.rol_id = r.id where correo = '$email'";
      
      $res=  Database::query($queryDataBase);
           
      if (isset($email) && $email !== "" ) {
      if ($res->rowCount()== 1) {
          $data= $res->fetchAll(PDO::FETCH_ASSOC);
        
        
          if (password_verify($contrasena, $data[0]["contrasena"])) {

            return $data;
        } else {
            echo "los datos no coinciden";
            
        }
          
      }
    } else {
      echo "No coinciden las credenciales";
    }
    }
     

}