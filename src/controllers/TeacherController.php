<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Roles.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Clases.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/admin/Students.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/admin/Teacher.php");




class TeacherController
{

  public function home()
  {    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/home.php";
  } 


  public function readT()
  {
    $usuariosT = UsuariosT::all();
   
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Teacher/readT.php";

  }
  public function createT()
  {
    $dataClases=Clases::all();
    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Teacher/createT.php";
  }


  public function insertT($dataT)
  {
    $newdata = UsuariosT::insertT($dataT);
    if ($newdata) {
     header("Location:/readTeacher");
    }
  }

  public function deleteT($id)
  {
    $deleted = UsuariosT::deleteT($id);  
   if ($deleted) {
    header("Location:/readTeacher");
   }

  } 
  public function editT($id)
  {
    $dataClases=Clases::all();
    $usuarioT=UsuariosT::find($id);
    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/Admin/Teacher/editT.php";
  
  } 
  public function updateT($dataTeacher)
  {
    
    $dataT= UsuariosT::update($dataTeacher);
 
    if ($dataT) {
      var_dump($dataTeacher);
      header("Location:/readTeacher");
      
     }   
  
  } 




}