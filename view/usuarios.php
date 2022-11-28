<?php 
    include_once 'templates/header.php';
    include_once 'controller/usuarioController.php';

    $obj = new UsuarioController();
    $listaUsuarios = $obj->consultarUsuarios();    
?>
    
    <div class="d-flex">
        
        <?php include_once("templates/sidebar-admin.php") ?>      


        <div class="w-100">
            
        <?php include_once("templates/navbar.php") ?>

        <div class="content-wrapper">

            <div class="content">
                <section class="my-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="fw-bold mb-0 ">Usuarios</h3>
                            </div>

                            <div class="col me-5">
                                <a class="btn btn-primary text-light " href="./?op=crearUsuario">Crear Nuevo Usuario</a>
                            </div>
                        </div>
                    </div>
                </section>                

                <section class="border-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="fw-bold mb-0 text-center">Tabla de Usuarios</h6>
                                    </div>

                                    <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>Correo</th>
                                                        <th>Tipo Usuario</th>
                                                        <th>Foto</th>
                                                        <th>Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                    <?php

                                                        $n = 1;                                                        
                                                        foreach($listaUsuarios as $users){
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $n;?></td>
                                                                    <td><?php echo $users['nombre'];?></td>
                                                                    <td><?php echo $users['apellido'];?></td>
                                                                    <td><?php echo $users['correo'];?></td>
                                                                    <td><?php echo $users['id_tipo'];?></td>
                                                                    <td></td>
                                                                    <td>
                                                                        <a href="" class="btn btn-info">modificar</a>
                                                                        <a href="" class=" btn btn-danger">eliminar</a>
                                                                    </td>
                                                                </tr>                                                            
                                                            <?php
                                                            $n++;
                                                        }
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
