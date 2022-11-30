<?php

include_once 'templates/header.php';
include_once 'controller/ventaController.php';
?>
    
    <div class="d-flex">
        <?php
        if ($_SESSION['id_tipo'] == 1 || $_SESSION['id_tipo'] == 4) {
            include_once 'templates/sidebar-admin.php';
        } elseif ($_SESSION['id_tipo'] == 2) {
            include_once 'templates/sidebar-ventas.php';
        }
        ?>
        <div class="w-100">
            <?php include_once("templates/navbar.php") ?>

            <div class="content-wrapper">

                <div class="content">

                    <section class="my-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h3 class="fw-bold mb-0 mt-2">Venta</h3>
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
                                                        <th>Id_Venta</th>
                                                        <th>Tipo de Cliente</th>
                                                        <th>Actualizado por</th>
                                                        <th>Monto</th>
                                                        <th>Fecha</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                    <?php
                                                        $obj = new ventaController();
                                                        $listaVenta = $obj->ConsultarVentasDatos();
                                                        $n = 1;                                                        
                                                        foreach($listaVenta as $ventas){
                                                             ?>
                                                                <tr>
                                                                    <td><?php echo $n;?></td>
                                                                    <td><?php echo $ventas['id'];?></td>
                                                                    <td><?php echo $ventas['tipo_cliente'];?></td>
                                                                    <td><?php echo $ventas['actualizado_por'];?></td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="script.js"></script>
    
    
  </body>
</html>
