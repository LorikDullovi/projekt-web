<?php
    class DatabaseConnection{
        private $server="localhost";
        private $username="root";
        private $password="";
        private $database="db";

        function startConnection(){
            if(!$conn = mysqli_connect($this->server,$this->username,$this->password,$this->database)){
                //echo "Connection failed";
                return null;
            }else{
                //echo "Connection successfully <br>";
                return $conn;
            }
        }
    }
    $db = new DatabaseConnection();
    $db->startConnection();
?>