<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Roles.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Clases.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/admin/ClasesM.php");





class ClasesController
{



  public function readC()
  {
    $usuariosC = UsuariosC::all();

    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Class/readC.php";
  }
  public function createT()
  {
    $dataClases = Clases::all();
    $usuariosC = UsuariosC::all();


    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Class/createC.php";
  }


  public function insertC($dataC)
  {
    $newdata = UsuariosC::insertC($dataC);
    $usuariosC = UsuariosC::all();


    if ($newdata) {
      header("Location:/readClass");
    }
  }

  public function deleteClass($id)
  {
    $deleted = UsuariosC::deleteC($id);
    $usuariosC = UsuariosC::all();  

    if ($deleted) {

    
     header("Location:/readClass");
    }
  }
  public function editClass($id)
  {

    $usuarioC = UsuariosC::find($id);
    $usuariosT = UsuariosC::all();

    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Class/editClass.php";
  }

  public function updateClass($dataClass)
  {

    
    $dataClases = Clases::all();
    $dataC = UsuariosC::update($dataClass);
    if ($dataC) {

      header("Location:/readClass");
     
    }
  }
}
