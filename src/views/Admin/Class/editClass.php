<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>


    <main class="h-screen bg-gray-300 flex w-[1300px] justify-center items-center">

        <div class="container ml-auto mr-auto  flex flex-col justify-center items-center ">

            <div class="w-[400px] ">


                <form class=" bg-white flex flex-col justify-center items-start pl-10 rounded-md h-[350px] gap-y-3" action="/updateC" method="post">

                    <h1 class="pb-[10px] text-2xl">Editar Clase</h1>



                    <div class="flex flex-col gap-y-3 ">
                        <label>Nombre de la Materia a modificar</label>
                        <select class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" name="materia">
                            <?php

                            foreach ($usuariosC as $usuario) {

                                $nameClass = $usuario["materias"];
                                $claseId = $usuario["clase_id"];


                                if ($claseId === $usuario["id"]) {

                                    echo "<option value='$claseId' selected>$nameClass</option>";
                                } else {
                                    echo "<option value='$claseId'>$nameClass</option>";
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="flex flex-col gap-y-3 ">
                        <label>Nueva Materia</label>
                        <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="editClass" value="<?= $usuario['materias'] ?>">

                        <input type="text" hidden name="nameClass" value="<?= $usuario['materias'] ?>">


                        <label>Maestro disponible para la clase</label>
                        <select class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" name="maestro">
                            <?php




                            foreach ($usuariosC as $usuario) {

                                $maestro = $usuario["nombre"];
                                $maestroId = $usuario["maestro_id"];
                                echo "<option value='$maestroId'>$maestro</option>";
                                if ($maestroId === $usuario["rol_id"]) {

                                    echo "<option value='$maestroId' selected>$nameRol</option>";
                                } else {
                                    echo "<option value='$rolId'>$nameRol</option>";
                                }
                            }

                            ?>
                        </select>
                    </div>

                    <div>
                        <button class="w-[50px] h-[30px] bg-gray-700 rounded-md text-xs text-white"><a href="/readClases">Close</a></button>
                        <button class="w-[100px] h-[30px] bg-blue-700 rounded-md text-xs text-white" type="submit">Guardar Cambios</button>
                    </div>
                </form>

            </div>
        </div>
    </main>
</body>

</html>