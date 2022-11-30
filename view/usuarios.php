<?php 
    include_once 'templates/header.php';
?>
    
    <div class="d-flex">
        
        <?php include_once("templates/sidebar-admin.php") ?>      


        <div class="w-100">
            
        <?php include("templates/navbar.php") ?>

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

                                    <p class="text-center">
                                        <?php 
                                            if (isset($_GET['msg']) && $_GET['msg']=="1"){ 
                                                ?>
                                                <div class="alert alert-success" role="alert">
                                                    Los datos se eliminaron exisomente...
                                                </div> 
                                                <?php 
                                            } else if (isset($_GET['msg']) && $_GET['msg']=="-1"){
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                    Se produjo un error al eliminar los datos...
                                                </div>
                                                <?php 
                                            }
                                        
                                        ?>
                                    </p>


                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="fw-bold mb-0 text-center">Tabla de Usuarios</h6>
                                    </div>

                                    <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Id</th>
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
                                                            if($users['id_tipo']==4){ ?>
                                                                <tr>
                                                                    <td><?php echo $n;?></td>
                                                                    <td><?php echo $users['id'];?></td>
                                                                    <td><?php echo $users['nombre'];?></td>
                                                                    <td><?php echo $users['apellido'];?></td>
                                                                    <td><?php echo $users['correo'];?></td>
                                                                    <td><?php echo $users['id_tipo'];?></td>
                                                                    <td></td>
                                                                </tr>                                                           


                                                            <?php }else{
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $n;?></td>
                                                                    <td><?php echo $users['id'];?></td>
                                                                    <td><?php echo $users['nombre'];?></td>
                                                                    <td><?php echo $users['apellido'];?></td>
                                                                    <td><?php echo $users['correo'];?></td>
                                                                    <td><?php echo $users['id_tipo'];?></td>
                                                                    <td></td>
                                                                    <td>
                                                                        <a href="./?op=actualizarUsuario&id=<?=$users['id'];?>" class="btn btn-info">modificar</a>
                                                                        <a href="./?op=eliminarUsuario&id=<?=$users['id'];?>" class=" btn btn-danger">eliminar</a>

                                                                        <!-- Modal -->
                                                                        <!--div class="modal fade" id="exampleModal">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Está seguro(a) que desea eliminar este usuario?</h1>
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        Una vez eliminado el usuario, no podra restablecerlo...
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary text-light" data-bs-dismiss="modal">Cancelar</button>
                                                                                        <a href="">
                                                                                            <button type="button" class="btn btn-danger text-light">Eliminar</button>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div-->

                                                                    </td>
                                                                </tr>                                                            
                                                            <?php }

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
