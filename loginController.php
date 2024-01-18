<?php 
include_once 'userRepository.php';

if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
      $loginError = "Fill all required fields!";
    }else{
      $email = $_POST['email'];
      $password = $_POST['password'];

      $userRepository = new UserRepository;
      $user = $userRepository->getUserByEmail($email,$password);
  
      if(empty($user)){
        $loginError = "Username or Password is Incorrect!";
      }else{

        $_SESSION["user"] = $user;
        header("Location: about.php"); 
      }
    }
}

?>