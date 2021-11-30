<?php
    // class db{
    //     private $dbHost = 'localhost';
    //     private $dbUser = 'root';
    //     private $dbPass = 'root';
    //     private $dbName = 'Paint';
    //     //conexion

    //     public function connectionDB() {
    //         $conexion = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
    //         if ($mysqli->connect_errno) {
    //             echo "Problema con la conexion a la base de datos";
    //         }
    //         return $mysqli;
    //     }
                
    //     public function disconnect() {
    //         $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
    //         mysqli_close($mysqli);
    //     }
    // }

    Class conectar {

        public static function conexion(){
    
            try {
    
                $conexion = new PDO('mysql:host=localhost; dbname=Paint', 'root', 'root');
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET UTF8");
    
            } catch (Exception $ex) {
                die("Error: " . $ex->getMessage());
                echo "Linea de error: " . $ex->getLine();
            }
            return $conexion;
        }
    }
    