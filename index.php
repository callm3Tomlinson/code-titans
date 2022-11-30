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

    if ($opcion=="registrar"){
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
        $usuario->ConsultarUsuarios();
    }

    elseif($opcion=="crearUsuario"){
        //Llamada al método para presetar la pantalla para crear usuario
        $usuario->CrearUsuario();
    }

    elseif($opcion=="actualizarUsuario"){
        $usuario->ActualizarUsuario();
    }

    elseif($opcion=="modificar"){
        $usuario->ActualizarDatos();
    }

    elseif($opcion=="eliminarUsuario"){
        
        $usuario->EliminarUsuario();
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
    
        $usuario->ActualizarUsuario();

    }
    
    elseif($opcion=="cerrar_sesion"){
        //Llamada al método para cerrar sesión...
        $controller->Logout();        
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

