<?php 
    require_once 'db.php';

    class Venta{

        public $id;
        public $id_articulo;
        public $cantidad;
        public $precio;        
        public $tipo_cliente;
        public $actualizado_por;
        public $monto;
        public $fecha;

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

        public function RegistrarVenta(venta $data){

            try{
                $sql ="INSERT INTO venta (id,tipo_cliente,actualizado_por, monto, fecha)
                VALUES(null,?,?,?,?)";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $data->id,
                            $data->tipo_cliente,
                            $data->actualizado_por,
                            $data->monto,
                            $data->fecha
                        )
                    );               
                $this->msg="1";
            
            }
            catch(Exception $e)
            {
                if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
                    $this->msg="Correo electrónico ya está registrado en el sistema";
                 } else {
                    $this->msg="-1";
                 }                 
            }
            return $this->msg;
        }

        public function ConsultarVentas(){

            try{
                $stm = $this->pdo->prepare("SELECT id,tipo_cliente,monto,fecha FROM venta");
                $stm->execute();           
                $ventas = $stm->fetchAll();
                return $ventas;
        }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function ConsultarVentasDatos(){

            try{
                $stm = $this->pdo->prepare("SELECT * FROM venta");
                $stm->execute();           
                $ventas = $stm->fetchAll();
                return $ventas;
        }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function ConsultarVentasDetalles(){

            try{
                $stm = $this->pdo->prepare("SELECT * FROM venta_detalle");
                $stm->execute();           
                $ventas = $stm->fetchAll();
                return $ventas;
        }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function ConsultarVentasSemanales(){

        }
        public function ConsultarVentasDiarias(){
            
        }

        public function ConsultarVentasPorCliente(){

        }
        
        
    }
?>