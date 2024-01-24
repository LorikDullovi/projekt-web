<?php 
session_start();
include_once 'userRepository.php';

if (isset($_POST['deleteUser'])) {
    $userRepository = new UserRepository;
    $userRepository->deleteUser();
    header("Location: login.php"); 
}