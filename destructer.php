<?php
    class abc{
        private $conn;
        public function __construct(){
           $this->conn=mysqli_connect();
        }
        public function insert(){
            echo "Hello Everyone" ;
        }
        public function __destruct(){
               mysqli_close($this->conn);
        }
    }
    $test= new abc();
    $test->insert(); 
    $test->insert(); 
    $test->insert(); 
?>