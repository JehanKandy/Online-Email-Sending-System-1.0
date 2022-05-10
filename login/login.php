<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">&nbsp;&nbsp;Email Sending System - login</a>
    <span class="navbar-text">
        Send Emails &nbsp&nbsp&nbsp&nbsp
        <a href="../index.php"><button class="btn btn-primary"> &nbsp; back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    </span>
</nav>

<div class="login-content">
    <br><br><br><br><br><br>
        <div class="login-box">
            <h1>login</h1>
            <hr style="color: grey;">
            <?php
                    include_once("../login/lib/functions/admin_user_func.php");
                    

                    if(isset($_POST['login'])){        
                        $result = user_login($_POST['username'],$_POST['password']);
                        echo ($result);
                        
                    }
                ?>
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <p>Username : </p>
                    <input type="text" name="username" placeholder="Username" class="login-input" required>
                    <br><br>
                    <p>Password : </p>
                    <input type="password" name="password" placeholder="Password" class="login-input" required>
                    <br><br>
                    <input type="submit" value="Login" name="login" class="login-btn">
                </form>
            
            <hr style="color: grey;">
            <p>Don't have an Account ? <a href="reg.php" style="text-decoration: none; color:#2949b4;">Create One</a></p>            
        </div>
    <br><br><br><br><br><br><br><br>
</div>



<div class="footer">
    <div class="card text-center">
    <div class="card-footer text-muted">
        &copy; &nbspDEVELOPED BY : <a href="https://github.com/JehanKandy" target="_blank" style="text-decoration: none;">JEHANKANDY</a> || 2022 May
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
