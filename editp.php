<?php
session_start();
include "configcon.php";

$un=$_SESSION["uname"];
$upassword=$_POST['reg_password'];
$uhostel=$_POST['uuhostel'];

    $query="Update users set password='$upassword',address='$uroom' WHERE fname= '$un' ";

mysqli_query($db,$query);

header('Location: http://localhost/confessions/new.php');


   





?>























