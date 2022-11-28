<?php 
    include_once 'templates/header.php';

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
                                <div class="col-lg-9">
                                    <h3 class="fw-bold mb-0 mt-2">Crear Usuario</h3>
                                </div>
                            </div>
                        </div>
                    </section> 
                    
                    <section class=" w-50 my-3">
                        <div class="align-items-center">
                            <form class=" w-100" id="" name="" action="" method="">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" required>
                                    
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido:</label>
                                    <input type="text" class="form-control" id="apellido" required>
                                </div>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo:</label>
                                    <input type="text" class="form-control" id="correo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Contraseña:</label>
                                    <input type="password" class="form-control" id="pass" required>
                                </div>

                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>seleccione tipo de usuario</option>
                                        <option value="1">admin</option>
                                        <option value="2">personal de ventas</option>
                                        <option value="3">personal de cocina</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>                        
                    </section>
                </div>
                
                <?php include_once("templates/footer.php") ?>
            </div>           
        </div>
    </div>
