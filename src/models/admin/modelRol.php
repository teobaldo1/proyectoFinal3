<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");

class UsuariosRol
{


    public static function all()
    {
        $queryDataBase = "select u.id, u.dni, u.nombre, u.correo, u.contrasena, u.direccion, u.fechaNacimiento, u.rol_id, r.rol  from usuarios u  inner join roles r  on u.rol_id  = r.id";

        $res =  Database::query($queryDataBase);
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }



    public static function find($id)
    {
        $queryGetDataId = "select * from usuarios where id = $id";

        $resp =  Database::query($queryGetDataId);

        $dataId = $resp->fetch(PDO::FETCH_ASSOC);

        return $dataId;
    }

    public static function updateR($dataR)
    {
        var_dump($dataR);
        $id = $dataR["id"];
        $correo = $dataR["correo"];
        $rol = $dataR["rolUser"];

        $queryupdate = "update usuarios set  correo='$correo', rol_id='$rol' where id = $id";

        $resp =  Database::query($queryupdate);
        if ($resp) {

            return true;
        }
    }
}
