<?php
    include("connection.php");
    $fname= $_POST['name'];
    $email= $_POST['email'];
    $age= $_POST['age'];
    $address= $_POST['address'];
    $password= $_POST['password'];

    $ret=mysqli_query($con,"select * from regform where email='$email'");
    $count=mysqli_num_rows($ret);
    if ($count>0) {
        header("Location: sign_up.php");
    }else {
        $sql= "insert into regform(firstname,email,age,address, password) value('$fname','$email', '$age', '$address', '$password')";
        $query=mysqli_query($con, $sql);
        header("Location: sign_up.php");
    }
 
?>