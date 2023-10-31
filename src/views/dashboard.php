<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

  
    switch($_SESSION["admin"][0]["rol_id"]) {
        case 1:
            
            header("Location:/home");
            break;
        case 2:
            header("Location:/homeTeacher");
            break;
        case 3:
            header("Location:/homeStudent");
            break;

        default:
            echo "No tienes un rol asignado ";
            break;
    }


    ?>
</body>

</html>