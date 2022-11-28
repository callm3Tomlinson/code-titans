<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> 
    <link rel="stylesheet" href="css/general.css"/>
    <link rel="stylesheet" href="iniciar_sesion.css"/>
  </head>
  <body>

    <div class="wrapper w-100 d-flex flex-column align-items-center justify-content-center bg-silver-white">

      <div class="w-50 p-3 d-flex flex-column align-items-center bg-grey rounded-5 text-center">

        <div class="logo-lg">
          <img src="images/logo_utp.png" alt="">
        </div>

        <div class="titulo">
          <h3 class="fw-bold">Sistema de Cafetería de La Universidad Tecnológica de Panamá</h3>
          <h4 class="title mt-2 mx-auto">Inicie Sesión Aquí</h4>
        </div>

        <form action="./?op=acceder" method="POST" class="col-lg-3 w-50">
          <div class="input-group mb-3">
            <span class="input-group-text">@</span>
            <input type="text" id="correo" name="correo" class="form-control" placeholder="Username" required>
          </div> 
          
          <div class="input-group mb-3">
            <span class="input-group-text material-symbols-outlined">
              password
              </span>
            <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
          </div>
          
          <div class="col-auto">
            <button type="submit" class="btn btn-primary text-light fw-bold mb-3 w-100 border-0">Iniciar Sesión</button>
          </div>     
        
        </form>
      </div>    
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    
    
  </body>
</html>
