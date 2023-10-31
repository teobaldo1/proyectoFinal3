<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");

class Usuarios
{


     public static function all()
     {
          $queryDataBase = "select * from usuarios where rol_id= 3";

          $res =  Database::query($queryDataBase);
          $data = $res->fetchAll(PDO::FETCH_ASSOC);

          return $data;
     }
     public static function insert($data)
     {
          extract($data);

          $queryinsert = "insert into usuarios (dni, correo, nombre, direccion, fechaNacimiento,rol_id) values ('$dni','$correo','$nombre','$direccion','$fNacimiento','3')";


          $resp =  Database::query($queryinsert);
          if ($resp) {

               return true;
          }
     }

     public static function delete($id)
     {
          $queryDeleted = "delete from usuarios where id = $id";

          $resp =  Database::query($queryDeleted);
          if ($resp) {

               return true;
          }
     }
     public static function find($id)
     {
          $queryGetDataId = "select * from usuarios where id = $id";

          $resp =  Database::query($queryGetDataId);

          $dataId = $resp->fetch(PDO::FETCH_ASSOC);

          return $dataId;
     }

     public static function update($dataRol)
     {
          $id = $dataRol["id"];
          $dni = $dataRol["dni"];
          $correo = $dataRol["correo"];
          $nombre = $dataRol["nombre"];
          $direccion = $dataRol["direccion"];
          $fechaN = $dataRol["fNacimiento"];
          $rol = $dataRol["rolUser"];

        
          $queryupdate = "update usuarios set dni='$dni', correo='$correo', nombre='$nombre', direccion='$direccion', fechaNacimiento='$fechaN' where id = $id";

          $resp =  Database::query($queryupdate);
          if ($resp) {

               return true;
          }
     }
}
