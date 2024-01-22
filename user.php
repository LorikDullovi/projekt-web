<?php 
  class User{
      private $firstname;
      private $lastname;
      private $email;
      private $password;
      private $confirm;
      private $age;

      function __construct($firstname,$lastname,$email,$password,$confirm,$age){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->confirm = $confirm;
        $this->age = $age;
      }

      function getFirstname(){
        return $this->firstname;
    }
      function getLastname(){
          return $this->lastname;
      }
      function getEmail(){
        return $this->email;
      }
      function getPassword(){
        return $this->password;
      }
      function getConfirm(){
        return $this->confirm;
      }
      function getAge(){
        return $this->age;
      }

      function __toString(){
        return "User: ".$this->email." - ".$this->password;
      }
  }
