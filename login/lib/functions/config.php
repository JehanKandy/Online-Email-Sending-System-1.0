<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "sent_mails";

        $con = mysqli_connect($server,$user,$pass,$db);

        $result = (!$con)?null:$con;

        return $result;
    }
?>