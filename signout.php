<?php

include"configcon.php";
session_start();


$un=$_SESSION["uname"];
$query="UPDATE `users` SET ldate=(NOW()) WHERE fname='$un' ";
$result=mysqli_query($db,$query);

unset($_SESSION["uname"]);

header('Location: http://localhost/confessions/login.php');

?>