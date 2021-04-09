<?php
    session_start();
    include("connection.php");
    $email= $_POST['email'];
    $password= $_POST['password'];

    $_SESSION["email_session"] = $email;
    $sql="select * from regform where email='$email' and password='$password'";
    $ret=mysqli_query($con, $sql);

    $count=mysqli_num_rows($ret);
    if ($count>0) {
        header("Location: dashboard.php");
    }else{
        header("Location: sign_in.php");
    }
?>