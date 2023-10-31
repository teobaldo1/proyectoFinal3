<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
  <title>Document</title>
</head>

<body>
  <main class="h-screen flex flex-col items-center bg-orange-100 ">
    <img class="w-[230px]  rounded-full border-[1px] border-blue-100" src="/src/public/university.jpg" alt="image">
    <div class="flex flex-col h-[200px] w-[320px] bg-white rounded-md">
      <form class="flex flex-col h-[200px] w-[320px] bg-white items-center rounded-md" action="/index.php" method="post">
        <div class="flex flex-col gap-y-3 items-center pt-5 ">
          <h2 >Bienvenido ingresa con tu cuenta</h2>
          <div class="flex justify-center items-center border-[1px] border-gray-400">
            <input class=" w-[250px] h-[30px] pl-4 text-sm  border-0 border-gray-200 " type="email" placeholder="Email" name="correo">
            <span class="material-symbols-outlined pr-1 text-gray-400">
              mail
            </span>
          </div>
          <div class="flex justify-center items-center border-[1px] border-gray-400">
            <input type="password" class="w-[250px] h-[30px] pl-4 text-sm  border-0 border-gray-200 " placeholder="Password" name="contrasena">
            <span class="material-symbols-outlined  pr-1 text-gray-400 ">
              lock
            </span>
          </div>

        </div>

        <div class="pt-4 pl-[190px]">
          <button class="w-[80px] h-[25px] bg-blue-500 text-white   rounded-md  " type="submit">Ingresar</button>
        </div>
      </form>
    </div>
  </main>


</body>

</html>