<?php 

    require_once '../config/config.php';

    class Db{
        private $host;
        private $db;
        private $user;
        private $pass;
        public $con;

        public function __construct(){
            $this->host = constant('DB_HOST');
            $this->db = constant('DB');
            $this->user = constant('DB_USER');
            $this->pass = constant('PASS');
        }

        public function conectar(){

            try{
                $this->con = new PDO('mysql:host='.$this->host.'; dbname='.$this->db, $this->user,$this->pass);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->con;
            }
            catch(PDOException $e){
                echo $e->getMessage();
                exit();
            }
        }
    }

?>