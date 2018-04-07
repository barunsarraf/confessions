<?php
session_start();
include"configcon.php";

$First=$_POST['reg_first_name'];
$Last=$_POST['reg_last_name'];
$password=$_POST['reg_password'];
$Hostel=$_POST['reg_hostel'];

$query="INSERT INTO `users`(`fname`, `lname`, `address`, `password`) VALUES ('$First','$Last','$Hostel','$password')";

$_SESSION["uname"]=$First;
$result=mysqli_query($db,$query);


$query="SELECT fname,password FROM users WHERE fname= '$First' AND password='$password'";

$result=mysqli_query($db,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row["fname"]==$First && $row["password"]==$password)

{
    $_SESSION["uname"]=$First;
    header('Location: http://localhost/confessions/new.php');
    


} 
else
{
    echo "failed to login";
}







?>