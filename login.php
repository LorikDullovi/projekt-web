<?php
    session_start();
    $loginError = '';

    if (isset($_SESSION["user"])) {
        header("Location: about.php"); 
    }

    include_once 'loginController.php';
?>
<!DOCTYPE html>
<html>
<head >
    <title>Sign in</title>
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form">
            <h2>Sign in to School-App</h2>
                <input name="email" class="email" type="email" id="email" placeholder="Email">
                <br>
                <label class="incorrectemail" style="color: red;" id="incorrectEmail" for="email"></label>
                <br>

                <input name="password" class="password" type="password" id="password" placeholder="Password">
                <br>
                <label class="incorrectpassword" style="color: red;"     id="incorrectPassword"></label>
                <?php if (!empty($loginError)) : ?>
                    <div class="errorlogin"><?php echo $loginError; ?></div>
                <?php endif; ?>
                <br>
                <button type="submit" name="loginBtn" class="login" id="signinButton">Sign in</button>
            <p>Don't have an account?<a class="link" href="signup.php"> Sign up</a></p>
        </div>
    </form>
    <script>
        let signinButton =document.getElementById('signinButton');
        let incorrectEmail = document.getElementById('incorrectEmail'); 
        let emailRegex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        let incorrectPassword = document.getElementById('incorrectPassword');
        let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;

        signinButton.addEventListener('click', function(event){
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            if (email == '') {
                incorrectEmail.innerText='Fill the Email field!';
                event.preventDefault();
            } else {
                if (emailRegex.test(email) == true) {

                } else {
                    incorrectEmail.innerText='Incorrect Email!';
                    event.preventDefault();
                }
            }

            if (password == '') {
                incorrectPassword.innerText = 'Fill the Password field!';
                event.preventDefault();
            } else {
                if (passwordRegex.test(password) == true) {
                    return true;
                } else {
                    incorrectPassword.innerText = 'Incorrect Password';
                    event.preventDefault();
                }
            }
        })
    
    </script>
</body>
</html>