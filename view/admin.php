<?php

    include_once 'templates/header.php';

?>
    
    <div class="wrapper d-flex ">

        <?php include_once("templates/sidebar-admin.php") ?>

        <div class="w-100">
            
            <?php include_once("templates/navbar.php") ?>

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

                <section class="bg-light">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 d-flex my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Ventas Mensuales</h6>
                                            <h3 class="fw-bold">$50.000</h3>
                                            <h6 class="text-success">50.50%</h6>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 d-flex my-3">
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

                
                <?php include_once("templates/footer.php") ?>                
            </div>            
        </div>
    </div>
