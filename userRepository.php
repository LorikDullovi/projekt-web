<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user){
       
        $conn = $this->connection->startConnection();
       

        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $confirm = $user->getConfirm();
        $age = $user->getAge();
        echo "<br>";
        echo " firstname: $firstname";
        echo " lastname: $lastname";
        echo " email: $email";
        echo " password: $password";
        echo " confirm: $confirm";
        echo " age: $age";
        echo "<br>";


        $sql = "INSERT INTO user (Firstname,Lastname,Email,Password,Confirm,Age) VALUES ('$firstname','$lastname','$email','$password','$confirm','$age')";
        if(mysqli_query($conn, $sql)){
            echo "query is executed succesfuly";
            header("location:login.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }
    }

    function updateUser($user) {
        $conn = $this->connection->startConnection();

        $userId = $_SESSION['user'][0];
        $firstname = $user->getFirstname();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $age = $user->getAge();

        $sql = "UPDATE user SET Firstname = '$firstname', Lastname = '$lastname', Email = '$email', Age = '$age' WHERE Id = '$userId'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['user'][1] = $firstname;
            $_SESSION['user'][2] = $lastname;
            $_SESSION['user'][3] = $email;
            $_SESSION['user'][6] = $age;
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }
    }

    function deleteUser() {
        $conn = $this->connection->startConnection();

        $userId = $_SESSION['user'][0];

        $sql = "DELETE FROM user WHERE Id = '$userId'";
        if(mysqli_query($conn, $sql)){
            session_destroy();
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }
    }

    function getUserByEmail($email, $password){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM user WHERE Email = '$email' and Password = '$password'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            
            return $result;
        }else{
            return null;
        }
    }

}

?>