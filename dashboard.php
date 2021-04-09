<?php
session_start();
include("connection.php");
echo 'Welcome '.$_SESSION["email_session"];
?>