<?php
    session_start();
    if (isset($_SESSION["user"])) {
        if ($_SESSION["user"][7] == 'user') {
            header("Location: about.php"); 
        }   
    } else {
        header("Location: login.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <form action="editUserController.php" method="POST">
        <div class="container">
            <fieldset class="user-cont">
                <legend><strong>User</strong></legend>
                <p><strong><u>Firstname:</u></strong></p>
                <input id="user" type="text" name="firstname" value="<?php echo $_SESSION["user"][1]; ?>">
                <p><strong><u>Lastname:</u></strong></p>
                <input id="user" type="text" name="lastname" value="<?php echo $_SESSION["user"][2]; ?>">
                <p><strong><u>Email:</u></strong></p>
                <input id="user" type="email" name="email" value="<?php echo $_SESSION["user"][3]; ?>">
                <p><strong><u>Age:</u></strong></p>
                <input id="user" type="number" name="age" value="<?php echo $_SESSION["user"][6]; ?>">
            </fieldset>
            <div class="edit-cont">
                <button id="f" name="editUser"><strong>Edit</strong></button>
            </div>
        </div>
    </form>
    <form class="delete-form    " action="deleteUserController.php" method="POST">
        <button id="s" name="deleteUser"><strong>Delete</strong></button>
    </form>
</body>
</html>