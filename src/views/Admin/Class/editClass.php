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
                        <label>clase a modificar </label>
                        <input class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" type="text" name="editClass" value="<?= $dataClaseMaestro['clase'] ?>">
                         <input type="text" hidden name="id" value="<?= $_GET['id'] ?>">
                      
                        <label>Maestro disponible para la clase</label>
                        <select class="w-[320px] border-[1px] border-gray-500 text-gray-700 pl-2 rounded-md" name="maestro" >
                            <?php
                               foreach ($usuariosT as $maestro) {

                                $nameMaestro = $maestro["nombre_maestro"];
                                $maestroId = $maestro["id_maestro"];
                                print_r($dataClaseMaestro);
                                if ($nameMaestro == $dataClaseMaestro['nombre_maestro']) {

                                    echo "<option value='$maestroId' selected >$nameMaestro</option>";
                                } else {
                                    echo "<option value='$maestroId'>$nameMaestro</option>";
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