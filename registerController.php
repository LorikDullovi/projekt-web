<?php
include_once 'userRepository.php';
include_once 'user.php';

$firstname=$lastname=$email=$password=$confirm=$age="";

if(isset($_POST['registerBtn'])){
  if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) ||
  empty($_POST['password']) || empty($_POST['confirm']) || empty($_POST['age'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $age = $_POST['age'];
      $registerError = "Fill all required fields!";
  }else{
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm = $_POST['confirm'];
      $age = $_POST['age'];

  
    
      
     
      $user = new User($firstname,$lastname,$email,$password,$confirm,$age);
      $userRepository = new UserRepository;
      $userRepository->insertUser($user);
  }
}

?>