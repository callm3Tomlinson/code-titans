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
    <link rel="stylesheet" href="..\css\general.css">
    <link rel="stylesheet" href="..\css\admin.css">
  </head>
  <body>
    
    <div class="wrapper d-flex ">

        <?php include_once("sidebar-admin.php") ?>

        <div class="w-100">
            
            <?php include_once("navbar.php") ?>

            <div class="content-wrapper">
                
                <div class="content">
                <section class="my-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3 class="fw-bold mb-0"> Dashboard  <span class="ms-3">Bienvenido Charles</span></h3>                                
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-mix">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 d-flex my-3 stat">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Ventas Mensuales</h6>
                                            <h3 class="fw-bold">$50.000</h3>
                                            <h6 class="text-success">50.50%</h6>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 d-flex my-3 stat">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Ventas Semanales</h6>
                                            <h3 class="fw-bold">$50.000</h3>
                                            <h6 class="text-success">50.50%</h6> 
                                        </div>                                       
                                    </div>

                                    <div class="col-lg-4 d-flex my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Ventas Diarias</h6>
                                            <h3 class="fw-bold">$50.000</h3>
                                            <h6 class="text-success">50.50%</h6> 
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-grey">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="fw-bold mb-0 text-center">Reporte de ventas</h6>
                                    </div>

                                    <div class="card-body">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </section>

                </div>

                
                <?php include_once("footer.php") ?>                
            </div>            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    
    
    
  </body>
</html>