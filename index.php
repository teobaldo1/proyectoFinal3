<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/userController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/TeacherController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/ClasesController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/RolController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/StudentsController/StudentsController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/UserTeacherController/UserTeacherController.php");


$controller = new UserController();
$controllerT = new TeacherController();
$controllerC = new ClasesController();
$controllerR = new RolController();
$controllerStudent = new StudentsController;
$userControllerTeacher = new UserTeacherCotroller;


$fullUrl = $_SERVER["REQUEST_URI"];
$urlpart = explode("?", $fullUrl);
$url = $urlpart[0];



if ($_SERVER["REQUEST_METHOD"] === "POST") {

    switch ($url) {
        case "/index.php":
            $controller->login($_POST);
            break;
        case "/create":
            $controller->insert($_POST);
            break;
        case "/delete":
            $controller->delete($_POST["id"]);
            break;
        case "/update":
            $controller->update($_POST);
            break;
        case "/createT":
            $controllerT->insertT($_POST);
            break;
        case "/deleteT":
            $controllerT->deleteT($_POST["id"]);
            break;
        case "/updateT":
            $controllerT->updateT($_POST);
            break;
        case "/createC":
            $controllerC->insertC($_POST);
            break;
        case "/updateR":
            $controllerR->updateR($_POST);
            break;
        case "/deleteClase":
            $controllerStudent->deleteClass($_POST["id"]);
        case "/updateC":
            $controllerC->updateClass($_POST);
            break;

        case "/deleteClass":
            $controllerC->deleteClass($_POST["id"]);
            break;




        default:

            $controller->index();
            break;
    }
}


if ($_SERVER["REQUEST_METHOD"] === "GET") {

    switch ($url) {
        case "/dashboard":
            $controller->dashboard();
            break;
        case "/index":
            $controller->index();
            break;
        case "/readStudents":
            $controller->readE();
            break;
        case "/home":
            $controller->home();
            break;
        case "/create":
            $controller->create();
            break;
        case "/edit":
            $controller->edit($_GET["id"]);
            break;
        case "/readTeacher":
            $controllerT->readT();
            break;
        case "/createT":
            $controllerT->createT();
            break;
        case "/editT":
            $controllerT->editT($_GET["id"]);
            break;
        case "/readClass":
            $controllerC->readC();
            break;
        case "/createC":
            $controllerC->createT();
            break;
        case "/readRol":
            $controllerR->readR();
            break;
        case "/editR":
            $controllerR->editR($_GET["id"]);
            break;
        case "/homeStudent":
            $controllerStudent->home();
            break;
        case "/adminClass":
            $controllerStudent->readStudents($_GET["id"]);
            break;
        case "/editClass":
            $controllerC->editClass($_GET["id"]);
            break;
        case "/homeTeacher":
            $userControllerTeacher->home();
            break;
        case "/readUserTeacher":
            $userControllerTeacher->readTeacher($_GET["id"]);
            break;


        default:
            $controller->index();
            break;
    }
}
