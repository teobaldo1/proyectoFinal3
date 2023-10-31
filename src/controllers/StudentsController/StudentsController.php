<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/Database.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/students/StudentsModels.php");




class StudentsController
{
   
    public function home()
  {    
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/alumnos/homeStudent.php";
  } 

   

  public function readStudents($id)
  {
    
    $usuariosE = UsuariosStudents::all($id);
  
    include $_SERVER["DOCUMENT_ROOT"] . "/src/views/alumnos/readS.php";

  }
  


  public function insertT($dataT)
  {
    $newdata = UsuariosT::insertT($dataT);
    if ($newdata) {
     header("Location:/readTeacher");
    }
  }

  public function deleteClass($id)
  {
    $deleted = UsuariosStudents::deleteClass($id);  
   if (!$deleted) {
      
    header("Location:/adminClass");
    
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
      header("Location:/readTeacher");
     }   
  
  } 




}