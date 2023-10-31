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



            <form class="w-[400px] bg-white flex flex-col justify-center items-start pl-10 rounded-md h-[500px] gap-y-3" action="/updateT" method="post">

                <h1 class="pb-[10px] text-2xl">Editar Maestro</h1>

                <input type="text" hidden name="id" value="<?= $usuarioT['maestro_id'] ?>" />
                <input type="text" hidden name="clase_id" value="<?= $usuarioT['clase_id'] ?>" />

                <div class="flex flex-col gap-y-1 ">
                    <label>DNI</label>
                    <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="dni" value="<?= $usuarioT['dni'] ?>">
                </div>

                <div class="flex flex-col gap-y-1 "><label>Correo Electronico</label>
                    <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="correo" value="<?= $usuarioT['correo'] ?>">
                </div>

                <div class="flex flex-col gap-y-1 ">
                    <label>Nombre(s)</label>
                    <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="nombre" value="<?= $usuarioT['nombre'] ?>">
                </div>
                <div class="flex flex-col gap-y-1 ">
                    <label>Direccion</label>
                    <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="direccion" value="<?= $usuarioT['direccion'] ?>">
                </div>
                <div class="flex flex-col gap-y-1 ">
                    <label>Fecha de Nacimiento</label>
                    <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="fNacimiento" value="<?= $usuarioT['fechaNacimiento'] ?>">
                </div>

                <div class="flex flex-col gap-y-1 ">
                    <label>Clase Asignada</label>

                    <select class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" name="clase">
                        <?php

                        foreach ($dataClases as $dataClase) {

                            $materias = $dataClase["materias"];
                            $materiaId = $dataClase["id"];

                            if ($materiaId === $usuarioT["clase_id"]) {

                                echo "<option value='$materiaId' selected>$materias</option>";
                            } else {
                                echo "<option value='$materiaId' >$materias</option>";
                            }
                        }
                        ?>
                    </select>
                </div>


                <div>
                    <button class="w-[50px] h-[30px] bg-gray-700 rounded-md text-xs text-white"><a href="/readTeacher">Close</a></button>
                    <button class="w-[100px] h-[30px] bg-blue-700 rounded-md text-xs text-white" type="submit">Editar</button>

                </div>

            </form>
        </div>
    </main>
</body>

</html>