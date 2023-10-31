<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");

class UsuariosT
{


     public static function all()
     {
          $queryDataBase = "
          SELECT 
          u.id as id_maestro, u.dni, u.nombre as nombre_maestro, u.correo, u.contrasena,u.direccion,u.fechaNacimiento,cm.id as clase_maestro_id,cm.clase_id, cm.maestro_id, c.materias as clase
          FROM usuarios u
          LEFT JOIN clases_maestros cm ON u.id = cm.maestro_id
          LEFT JOIN clases c ON cm.clase_id = c.id
          WHERE u.rol_id = 2";

          $res =  Database::query($queryDataBase);
          $data = $res->fetchAll(PDO::FETCH_ASSOC);

          return $data;
     }

     public static function insertT($dataT)
     {
          extract($dataT);

          $queryinsert = "insert into usuarios (dni, correo, nombre, direccion, fechaNacimiento,rol_id) values ('$dni','$correo','$nombre','$direccion','$fNacimiento','2')";
          $resp =  Database::query($queryinsert);
          $queryGet = "select id from usuarios where correo = '$correo'";
          $respData =  Database::query($queryGet);
          $data = $respData->fetchAll(PDO::FETCH_ASSOC);

          $dataId = $data[0]["id"];
          $queryinsert1 = "insert into clases_maestros ( clase_id, Maestro_id) values ('$clase','$dataId')";
          $resp1 =  Database::query($queryinsert1);

          if ($resp1) {

               return true;
          }
     }

     public static function deleteT($id)
     {
          $queryDeleted = "delete from clases_maestros where maestro_id = $id";

          $resp =  Database::query($queryDeleted);
          if ($resp) {

               return true;
          }
     }
     public static function find($id)
     {
          $queryGetDataId = "select u.id, u.dni, u.correo,u.nombre, u.contrasena, u.direccion, u.fechaNacimiento, u.rol_id, cm.id, cm.clase_id, cm.maestro_id, c.id, c.materias from usuarios u  inner join clases_maestros cm  on u.id = cm.maestro_id inner join clases c  on cm.clase_id = c.id  where u.id= '$id'";
          $resp =  Database::query($queryGetDataId);
          $dataId = $resp->fetch(PDO::FETCH_ASSOC);

          return $dataId;
     }

     public static function update($dataT)
     {
          $clase_id = $dataT["clase_id"];
          $id = $dataT["id"];
          $dni = $dataT["dni"];
          $correo = $dataT["correo"];
          $nombre = $dataT["nombre"];
          $direccion = $dataT["direccion"];
          $fechaN = $dataT["fNacimiento"];
          $clase = $dataT["clase"];

          $queryupdate = "update usuarios set dni='$dni', correo='$correo', nombre='$nombre', direccion='$direccion', fechaNacimiento='$fechaN' where id = $id";
          $resp =  Database::query($queryupdate);

          $queryupdate1 = "update clases_maestros set clase_id ='$clase' where clase_id = '$clase_id' && maestro_id='$id'";
          $resp1 = Database::query($queryupdate1);


          if ($resp && $resp1) {
               return true;
          }
     }
}
