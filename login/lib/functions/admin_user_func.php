<?php 

use FTP\Connection; 

include_once("config.php");

session_start();


function reg_uesr($fn,$ln,$usern,$email,$pass1,$cpass,$country,$mobile){    
    $con = Connection();     

    $check_sql = "SELECT * FROM user_tbl WHERE username = '$usern' && email = '$email'";
    $check_reuslt = mysqli_query($con, $check_sql);
    $check_nor = mysqli_num_rows($check_reuslt);

    $pass_enc = md5($pass1);
    $cpass_enc = md5($cpass);

    if($check_nor > 0){
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Already Exists..!</div>&nbsp</center>";
    }
    elseif($pass_enc != $cpass_enc){
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password and Confirm Password doesn't match..!</div>&nbsp</center>";
    }
    else{
        $otp = rand(10000,99999);
        $msg = "Your Email Velidation OTP is :".$otp;
        
        $mailto = $email;
        $subject = "Verification OTP - Email Sending System";
        $body = $msg;
        $headers = "From:jehankandy@gmail.com";

        mail($mailto,$subject,$body,$headers);

        $otp_insert = "INSERT INTO otp_tbl(email,msg,otp_no,date_time)VALUES('$email','$msg','$otp', NOW())";
        $otp_result = mysqli_query($con, $otp_insert);

        
        setcookie('email',$email,time()+60*60,'/');
        $_SESSION['emailSession'] = $email;
  
        $sql_insert = "INSERT INTO user_tbl(fname,lname,username,email,pass1,country,mobile,otp_no,user_roll,user_status,account_type)VALUES('$fn','$ln','$usern','$email','$pass_enc','$country','$mobile','00000','user','1','free')";
        $result = mysqli_query($con, $sql_insert);
        
        header("location:../login/otp.php");
    }
}

function otp_check($otp_validate){
    $con = Connection();
    $email = strval($_SESSION['emailSession']);

    $check_otp = "SELECT * FROM otp_tbl WHERE email = '$email'";
    $check_otp_result = mysqli_query($con, $check_otp);
    $otp_row = mysqli_fetch_assoc($check_otp_result);

    if($otp_validate == $otp_row['otp_no']){

        $otp_update = "UPDATE user_tbl SET otp_no = '$otp_validate' WHERE email = '$email'";
        $otp_update_result = mysqli_query($con, $otp_update);
        header("location:../login/login.php");

    }
    else{
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>OTP Doesn't match...!</div>&nbsp</center>";
    }
}

function user_login($username, $pwd){
    $con = Connection();
    $new_pass = md5($pwd);

    $login_check = "SELECT * FROM user_tbl WHERE username =  '$username' && pass1 = '$new_pass'"; 
    $login_check_result = mysqli_query($con, $login_check);
    $login_nor = mysqli_num_rows($login_check_result);


    $login_row = mysqli_fetch_assoc($login_check_result);



    if($login_nor > 0){ 
        if($new_pass != $login_row['pass1']){
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password Doesn't Match...!</div>&nbsp</center>";
        }
        else{
            if($login_row['user_status'] == 1){
                if($login_row['user_roll'] == 'admin'){                    
                    setcookie('login',$login_row['user_id'],time()+60*60,'/');
                    $_SESSION['loginSession'] = $login_row['user_id'];
                    header('location:lib/views/admin.php');
                }
                elseif($login_row['otp_no'] == 0){
                    return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Verify Your Account <a href='otp.php'>Verify</a></div>&nbsp</center>"; 
                }else{
                    if($login_row['account_type'] == 'free'){
                        setcookie('login',$login_row['user_id'],time()+60*60,'/');
                        $_SESSION['loginSession'] = $login_row['user_id'];
                        header('location:lib/views/free_user.php');

                    }elseif($login_row['account_type'] == 'pro'){
                        setcookie('login',$login_row['user_id'],time()+60*60,'/');
                        $_SESSION['loginSession'] = $login_row['user_id'];
                        header('location:lib/views/admin.php');
                    }
                }
            }
            else{
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Account Deactivated</div>&nbsp</center>";  
            }
        }
    }
    else{
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Recode Not Found...!</div>&nbsp</center>";
    }
}

?>