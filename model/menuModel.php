<?php 
    require_once 'db.php';

    class Menu{
        public $id_articulo;
        public $id_categoria;
        public $actualizado_por;
        public $descripcion;
        public $cantidad;
        public $precio;        
        public $foto;

        private $pdo;
        private $msg;

        public function __construct(){
            try{
                $conn = new Db();
                $this->pdo = $conn->conectar();  
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function RegistrarMenu(venta $data){
        }

        public function ConsultarMenus(){

            try{
                $stm = $this->pdo->prepare("SELECT id_articulo,descripcion,precio,cantidad FROM menu");
                $stm->execute();           
                $menus = $stm->fetchAll();
                return $menus;
        }catch(Exception $e){
                die($e->getMessage());
            }
        }    

       
        public function EliminarMenu(usuario $data){}    
    }
?>