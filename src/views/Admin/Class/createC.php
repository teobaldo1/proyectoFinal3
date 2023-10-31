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




                <form class=" bg-white flex flex-col justify-center items-start pl-10 rounded-md h-[350px] gap-y-3" action="/createC" method="post">

                    <h1 class="pb-[10px] text-2xl">Agregar Clase</h1>

                    <input type="text" hidden name="nombreMaestro" value="<?= $usuario['nombre'] ?>">

                    <div class="flex flex-col gap-y-3 ">
                        <label>Nombre de la Materia</label>
                        <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="nombre">
                    </div>
                    <div class="flex flex-col gap-y-3 ">
                        </select>
                        <label>Maestro disponible para la clase</label>
                        <select class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" name="clase" id="">
                            <?php


                            foreach ($usuariosC as $usuario) {

                                $maestro = $usuario["nombre"];
                                $maestroId = $usuario["maestro_id"];
                                echo "<option value='$maestroId'>$maestro</option>";
                            }

                            ?>
                        </select>
                    </div>
                    <div>
                        <button class="w-[50px] h-[30px] bg-gray-700 rounded-md text-xs text-white"><a href="/readClases">Close</a></button>
                        <button class="w-[100px] h-[30px] bg-blue-700 rounded-md text-xs text-white" type="submit">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>