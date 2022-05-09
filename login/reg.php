<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">&nbsp;&nbsp;Email Sending System - Registration</a>
    <span class="navbar-text">
        Send Emails &nbsp&nbsp&nbsp&nbsp
        <a href="../index.php"><button class="btn btn-primary"> &nbsp; back</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
    </span>
</nav>

<div class="login-content">
    <br><br><br><br><br><br>
        <div class="login-box">
            <h1>Registration</h1>
            <hr style="color: grey;">
            <br>
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <table border="0">
                        <tr>
                            <td>
                                <p>First Name : </p>
                            </td>
                            <td>
                                <p>Last Name : </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="fname" placeholder="First Name" class="login-input"><p></p>
                            </td>
                            <td>
                                <input type="text" name="lname" placeholder="Last Name" class="login-input"><p></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Username : </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="username" placeholder="Username" class="login-input"><p></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>Email : </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="email" name="email" placeholder="Email" class="login-input"><p></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Password : </p>
                            </td>
                            <td>
                                <p>Confirm Password : </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="pass1" placeholder="Password" class="login-input"><p></p>
                            </td>
                            <td>
                                <input type="password" name="cpass" placeholder="Confirm Password" class="login-input"><p></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Country : </p>
                            </td>
                            <td>
                                <p>Mobile Number : </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="country" class="login-input">
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="India">India</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="USA">USA</option>
                                </select><p></p>
                            </td>
                            <td>
                                <input type="text" name="lname" placeholder="Last Name" class="login-input"><p></p>
                            </td>
                        </tr>
                    </table>

                    <input type="submit" value="Register" name="register" class="login-btn" style="width: 49%;">&nbsp;&nbsp;<input type="reset" value="Clear" class="login-btn-clear" style="width: 48%;">

                </form>
            
            <hr style="color: grey;">
            <p>Already have an Account ? <a href="login.php" style="text-decoration: none; color:#2949b4;">Login</a></p>            
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