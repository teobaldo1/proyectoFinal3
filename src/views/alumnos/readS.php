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
                <div><a href="/califications">Ver tus Calificaciones</a>
                </div>
                <a href="/adminClass?id=<?= $_SESSION["admin"][0]["id"] ?>">Administrar tus Clases</a>

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
                    <h1 class=" text-2xl">lista de Materia</h1>
                    <div class="flex">
                        <a href="homeStudent" class="text-blue-500 text-xm">Home</a>
                        <h3>/ Materias</h3>
                    </div>
                </div>

            

            <div class="flex justify-between items-center w-[1020px] h-[50px] pl-4 pr-10 text-md">
                <h2>Tus Materias Inscritas</h2>
                <button class="w-[100px] h-[30px] bg-blue-700 rounded-md"><a href="createMateria" class="text-xs text-white">Inscribir</a></button>
            </div>

            <table>
                <thead class="border-[1px]  border-gray-600 flex">
                    <tr class="bg-gray-300">
                        <th class="border-[1px] border-gray-500 w-[80px]  ">ID</th>
                        <th class="border-[1px] border-gray-500 w-[150px]">Materia</th>
                        
                        <th class="border-[1px] border-gray-500 w-[78px] ">Darse de Baja</th>
                    </tr>
                </thead>
                <tbody class="bg-white ">
                    <?php


                    foreach ($usuariosE as $usuario) {
                    ?>
                        <tr class="flex">
                            <td class="border-[1px] border-gray-500  w-[80px] flex justify-center"><?= $usuario["id"]?></td>
                            <td class="border-[1px] border-gray-500  w-[150px] flex justify-center "><?= $usuario["materias"] ?></td>
                            <td class="border-[1px] border-gray-500  w-[80px]  flex justify-center">
                                <form action="/deleteClase" method="post" class="bg-white">
                                     <button type="submit" name="id" value="<?= $usuario["id"]  ?>"><span class="material-symbols-outlined text-red-500">
                                            delete
                                        </span></button>
                                       
                                </form>

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