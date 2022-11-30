<?php 

include_once 'templates/header.php';
?>    
    <div class="d-flex">
    <?php 
        if($_SESSION['id_tipo']==1 || $_SESSION['id_tipo']==4){
            include_once 'templates/sidebar-admin.php';
        }elseif($_SESSION['id_tipo']==2){
            include_once 'templates/sidebar-ventas.php'; 
        }   
    ?>

        <div class="w-100">
            <?php include("templates/navbar.php") ?>

            <div class="content-wrapper">
                <div class="content">
                    <section class="my-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h3 class="fw-bold mb-0 mt-2">Reportes</h3>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="bg-grey border-bottom">
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
                    
                    <section class="bg-grey">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 my-3">
                                    <div class="card rounded-0">
                                        <div class="card-header bg-light">
                                            <h6 class="fw-bold mb-0 text-center">Reporte de Compras</h6>
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
                
                <?php include_once("templates/footer.php") ?>
            </div>           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="script.js"></script>
    
    
  </body>
</html>
