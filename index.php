<?php
require_once 'model/db.php';
//Incluyo los archivos necesarios
require("./controller/controller.php");
require("./controller/usuarioController.php");

//Instancio el controlador
$controller = new Controller;
$usuario = new UsuarioController;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op']))
{
    $opcion=$_GET['op'];
    if ($opcion=="crear"){
        //Llamo al método ver pasándole la clave que me están pidiendo
        $usuario->CrearUsuario();
    }

    elseif ($opcion=="registrar"){
        //Llamo al método ver pasándole la clave que me están pidiendo
        $usuario->Guardar();
    }

    elseif ($opcion=="acceder"){
        //Llamo al método ver pasándole la clave que me están pidiendo    
        $controller->Ingresar();
    }

    elseif ($opcion=="panel-admin"){
        //Llamo al método ver pasándole la clave que me están pidiendo    
        $controller->IngresarPanelAdmin();
    }

    elseif($opcion=="panel-ventas"){
        //Llamo al método ver pasándole la clave que me están pidiendo    
        $controller->IngresarPanelVentas();        
    }

    elseif($opcion=="usuarios"){
        //Llamada al método para cerrar sesión...
        $controller->VerUsuarios();
    }

    elseif($opcion=="crearUsuario"){
        //Llamada al método para presetar la pantalla para crear usuario
        $controller->CrearUsuario();
    }

    elseif($opcion=="menus"){
        //Llamada al método para cerrar sesión...
        $controller->VerMenus();
    }

    elseif($opcion=="ventas"){
        //Llamada al método para cerrar sesión...
        $controller->RegistrarVenta();
    }

    elseif($opcion=="reportes"){
        //Llamada al método para cerrar sesión...
        $controller->VerReportes();
    }

    elseif ($opcion=="actualizar"){
        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $usuario->ActualizarDatos();

    }
    
    elseif($opcion=="cerrar_sesion"){
        //Llamada al método para cerrar sesión...
        $controller->Login();        
    }

    else{
    //Llamo al método por defecto del controlador
        $controller->Login();
    }
}
else{
        //Llamo al método por defecto del controlador
        $controller->Login();
    }

