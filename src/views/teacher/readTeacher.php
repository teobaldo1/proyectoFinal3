<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
        <div class="h-screen flex flex-col  items-center bg-slate-100 pt-10">
        <h1 class="text-2xl justify-start font-bold pb-3">Alumnos de la clase</h1>
            <div class="flex justify-between items-center w-[1020px] h-[50px] pl-4 pr-10 text-md">
                <h1 class="text-1xl font-bold pb-3">Alumnos de la clase</h1>

                <div><a class="text-blue-500" href="/homeTeacher">Home</a>/

                <a href="/config/logout.php">Logout</a>
                </div>

            </div>



            <div class="flex">
                <h2>Alumnos de la clase</h2>

            </div>

            <table>
                <thead class="border-[1px]  border-gray-600 flex">
                    <tr class="bg-gray-300">
                        <th class="border-[1px] border-gray-500 w-[80px]  ">ID</th>
                        <th class="border-[1px] border-gray-500 w-[160px]">Nombre de Alumno</th>

                    </tr>
                </thead>
                <tbody class="bg-white ">
                    <?php


                    foreach ($usuariosT as $usuario) {
                    ?>
                        <tr class="flex">
                            <td class="border-[1px] border-gray-500  w-[80px] flex justify-center"><?= $usuario["id"] ?></td>
                            <td class="border-[1px] border-gray-500  w-[150px] flex justify-center "><?= $usuario["nombre"] ?></td>


                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>