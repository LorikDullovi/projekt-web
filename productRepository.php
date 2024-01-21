<?php 
include_once 'databaseConnection.php';

class ProductRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function getAll(){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM products";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_all();
            
            return $result;
        }else{
            return null;
        }
    }

    function insertProduct($product){
        $conn = $this->connection->startConnection();

        $firstname = $product->getFirstname();
        $lastname = $product->getLastname();
        $email = $product->getEmail();
        $password = $product->getPassword();
        $confirm = $product->getConfirm();
        $age = $product->getAge();

        $sql = "INSERT INTO user (Firstname,Lastname,Email,Password,Confirm,Age) VALUES ('$firstname','$lastname','$email','$password','$confirm','$age')";
        if(mysqli_query($conn, $sql)){
            echo "query is executed succesfuly";
            header("location:login.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }
    }

    function updateProduct($user) {
        $conn = $this->connection->startConnection();

        $userId = $_SESSION['user'][0];
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $age = $user->getAge();

        $sql = "UPDATE user SET Firstname = '$firstname', Lastname = '$lastname', Email = '$email', Age = '$age' WHERE Id = '$userId'";
        if(mysqli_query($conn, $sql)){
           
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }
    }

    function deleteProduct() {
        $conn = $this->connection->startConnection();

        $userId = $_SESSION['user'][0];

        $sql = "DELETE FROM user WHERE Id = '$userId'";
        if(mysqli_query($conn, $sql)){
            session_destroy();
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }
    }
}