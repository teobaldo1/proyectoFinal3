<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main class="flex">
        <div class=" h-screen bg-gray-900 text-white pl-6 pt-6 w-[250px]">
            <div class="flex gap-3 pb-6 border-bottom-width:2px border-gray-500">
                <img class="w-[40px]  rounded-full border-[1px] border-blue-100" src="/src/public/university.jpg" alt="image">
                <h1 class="text-2xl ">Universidad</h1>
            </div>

            <div class="pb-6">
                <?php
                session_start();
                echo $_SESSION["admin"][0]["nombre"];
                ?>
                <br>
                <?php
                echo $_SESSION["admin"][0]["rol"];
                ?>
            </div>

            <div class="flex flex-col gap-y-2 items-start">
                <h1>MENU ADMINISTRACION</h1>
                <a href="/readUserTeacher?id=<?= $_SESSION["admin"][0]["id"] ?>">Alumnos</a>

            </div>
        </div>


        </div>
        <div class="h-screen bg-gray-200 w-[1020px] flex flex-col">
            <div class="flex justify-between items-center w-[1020px] h-[50px] pl-10 pr-10 bg-white ">
                <h2 class="text-gray-500 text-xm">Home</h2>
                <div class="text-gray-500 text-xm">
                    <?php
                    echo $_SESSION["admin"][0]["rol"] . "/";
                    ?>
                    <a href="/config/logout.php">Logout</a>
                </div>

            </div>
            <div class="pl-4">
                <div class="flex justify-between items-center w-[1020px] h-[50px] pl-4 pr-10 text-xs ">
                    <h1 class=" text-2xl">Dashboard</h1>
                    <div class="flex">
                        <a href="" class="text-blue-500 text-xm">Home</a>
                        <h3>/ Dashboard</h3>
                    </div>
                </div>



                <div class="pl-4 w-[600px] h-[70px] bg-white text-md mx-1 ">
                    <h2>Bienvenido</h2>
                    <p>Selecciona la accion que quieras realizar en las pestañas del menu de la izquierda</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>