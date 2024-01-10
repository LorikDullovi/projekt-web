<?php
    session_start();
    $registerError = '';

    include_once 'registerController.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
        <div class="container">
            <h2>Sign up to School-App</h2>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input name="firstname" class="firstname" type="text" id="firstName" placeholder="First Name" value="<?=$firstname?>">

            <label class="Firstname" style="color: red;" id="Fname"></label>
            <br>
            <input name="lastname" class="lastname" type="text" placeholder="Last Name" id="lastName" value="<?=$lastname?>">

            <label class="Lastname" style="color: red;" id="Lname" ></label>
            <br>
            <input name="email" class="email" type="email" placeholder="Email" id="email" value="<?=$email?>">

            <label class="Email" style="color: red;" id="Email"></label>
            <br>
            <input name="password" class="password" id="password" type="password" placeholder="Password" value="<?=$password?>">

            <label class="Fpassword" style="color: red;" id="Password"></label>
            <br>
            <input name="confirm" id="passwordconfirm" class="passwordconfirm" type="password" placeholder="Confirm" value="<?=$confirm?>">

            <label class="pwc" id="passwordc" style="color: red;"></label>
            <br>
            <input name="age" id="birthdate" placeholder="Age" class="date" type="number" min="18"  value="<?=$age?>">
            <label id="age" class="forage"></label>
            <?php if (!empty($registerError)) : ?>
                    <div class="errorregister"><?php echo $registerError; ?></div>
                <?php endif; ?>
            <a  class="signuplink" href=""><button type="submit" value="register" name="registerBtn" id="signupButton" class="signup">Sign up</button></a>
            <p>Already have an account? <a href="login.php">Sign in</a></p>
        </form>
        </div>
        <script>
            let signupButton = document.getElementById('signupButton');
            let firstName = document.getElementById('firstName'); 
            let firstNameRegex = /^[A-Z][a-z]+$/;
            let firstNamehasNumber = /\d/;

            signupButton.addEventListener('click', function(event){
            
                let firstName = document.getElementById('firstName').value;

                if(firstName == ''){
                    Fname.innerText='Fill the First Name field!';
                    event.preventDefault();
                }else{
                    if(firstNameRegex.test(firstName) == true){

                    }else{
                        Fname.innerText='Start with a capital letter!';
                        event.preventDefault();   

                        if(firstNamehasNumber.test(firstName) == true){
                            Fname.innerText = 'Cannot contains numbers!'
                        }
                    }
                }
            })

            let lastName = document.getElementById('lastName');
            let lastNameRegex = /^[A-Z][a-z]+$/;
            let lastNamehasNumber = /\d/;

            signupButton.addEventListener('click', function(event){

                let lastName = document.getElementById('lastName').value;

                if(lastName == ''){
                    Lname.innerText='Fill the Last Name field!';
                    event.preventDefault();
                }else{
                    if(lastNameRegex.test(lastName) == true){

                    }else{
                        Lname.innerText='Start with a capital letter!';
                        event.preventDefault();   

                        if(lastNamehasNumber.test(lastName) == true){
                            Lname.innerText = 'Cannot contains numbers!'
                        }
                    }
                }
            })
            let Email = document.getElementById('Email'); 
            let emailRegex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

            signupButton.addEventListener('click', function(event){
            
                let email = document.getElementById('email').value;

                if(email == ''){
                    Email.innerText='Fill the Email field!';
                    event.preventDefault();
                }else{
                    if(emailRegex.test(email) == true){

                    }else{
                        Email.innerText='Invalid Email';
                        event.preventDefault();
                    }
                }
            })
            let Password = document.getElementById('Password');
            let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

            signupButton.addEventListener('click', function(event){

                let password = document.getElementById('password').value;

                if(password == ''){
                    Password.innerText = 'Fill the Password field!';
                    event.preventDefault();
                }else{
                    if(password.length < 8){
                       Password.innerText = 'Longer than 8 characters';
                       event.preventDefault();
                    }else{
                        if(passwordRegex.test(password) == true){

                        }else{
                            Password.innerText = 'Type a stronger Passwrod!';
                            event.preventDefault();
                        }
                    }
                }
            })
            let passwordc = document.getElementById('passwordc');

            signupButton.addEventListener('click', function(event){
                let password = document.getElementById('password').value;
                let passwordconfirm = document.getElementById('passwordconfirm').value;

                if(passwordconfirm == password){
                    
                }else{
                    passwordc.innerText = 'Password does not match!';
                    event.preventDefault();
                }
            })

        </script>
</body>
</html>