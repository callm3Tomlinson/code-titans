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
                            </div>
                        </div>
                    </div>
                </section>

                <main>
                    <div class="container">
                        <div class="card  w-75 m-auto shadow-lg border-0 rounded-lg">
                            <form method="POST" id="crearC" name="formc" enctype="multipart/form-data"
                                action="./?op=modificar">

                                <div class="p-5">
                                    <h3 class="fw-bold mb-0 mt-2 text-center">Actualizar Usuario</h3>

                                    <p class="text-center">
                                        <?php 
                                            if (isset($_GET['msg']) && $_GET['msg']=="1"){ 
                                                ?>
                                                <div class="alert alert-success" role="alert">
                                                    Los datos se actualizaron exisomente...
                                                </div> 
                                                <?php 
                                            } else if (isset($_GET['msg']) && $_GET['msg']=="-1"){
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                    Se produjo un error al actualizar los datos...
                                                </div>
                                                <?php 
                                            }
                                        
                                        ?>
                                    </p>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-md-0">
                                                <input class="form-control" id="id" name="id" type="hidden"
                                                    placeholder="Nombre de Usuario"
                                                    value="<?php echo $usuario->id; ?>" required />                                                
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-md-0">
                                                <input class="form-control" id="inputNombre" name="nombre" type="text"
                                                    placeholder="Nombre de Usuario"
                                                    value="<?php echo $usuario->nombre; ?>" required />
                                                <label for="inputNombre">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputApellido" name="apellido"
                                                    type="text" placeholder="Apellido de Usuario"
                                                    value="<?php echo $usuario->apellido; ?>" required />
                                                <label for="inputApellido">Apellido</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputCorreo" name="correo" type="text"
                                            placeholder="name@example.com" value="<?php echo $usuario->correo; ?>"
                                            required />
                                        <label for="inputCorreo">Correo</label>
                                    </div>                                    

                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="tipo" aria-label="Default select example"
                                            value="'<?php echo $usuario->id_tipo; ?>'" required>
                                            <option selected>Seleccione tipo de usuario</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Personal de Ventas</option>
                                        </select>

                                    </div>

                                    <div class="row mb-3">

                                        <div class="col-md-6">
                                            <input type="file" name="foto" value="<?php echo $usuario->foto; ?>">
                                        </div>

                                    </div>

                                    <div class="mt-2 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block text-light fw-bold"
                                                type="submit" onclick="confirmPassword()">Modificar Usuario</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </main>

            </div>

            <script type="javascript" src="../js/validations.js"></script>;

            <?php include_once("templates/footer.php") ?>
        </div>
    </div>
</div>