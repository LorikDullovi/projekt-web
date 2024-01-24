<?php 
session_start();
include_once 'userRepository.php';
include_once 'user.php';

if (isset($_POST['editUser'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $user = new User($firstname, $lastname, $email, '', '', $age);
    $userRepository = new UserRepository;
    $userRepository->updateUser($user);

    header("Location: about.php"); 
}