<?php

    include_once 'templates/header.php';
    include_once 'controller/ventaController.php';
    $nombreusuario = $_SESSION["user"]; 

?>
    
    <div class="wrapper d-flex ">

        <?php include_once("templates/sidebar-ventas.php") ?>

        <div class="w-100">
            
            <?php include("templates/navbar.php") ?>

            <div class="content-wrapper">
                
                <div class="content">
                <section class="my-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3 class="fw-bold mb-0"> Dashboard  <span class="ms-3">Bienvenido <?php echo $nombreusuario; ?></span></h3>                                
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

                                    
                                    <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Id</th>
                                                        <th>Tipo de Cliente</th>
                                                        <th>Monto</th>
                                                        <th>Fecha</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                    <?php
                                                        $obj = new ventaController();
                                                        $listaVenta = $obj->ConsultarVentas();
                                                        $n = 1;                                                        
                                                        foreach($listaVenta as $ventas){
                                                             ?>
                                                                <tr>
                                                                    <td><?php echo $n;?></td>
                                                                    <td><?php echo $ventas['id'];?></td>
                                                                    <td><?php echo $ventas['tipo_cliente'];?></td>
                                                                    <td><?php echo $ventas['monto'];?></td>
                                                                    <td><?php echo $ventas['fecha'];?></td>
                                                                </tr>
                                                            <?php }

                                                            $n++;                                                        
                                                    ?>
                                                </tbody>
                                    </table>
                                
                                
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
