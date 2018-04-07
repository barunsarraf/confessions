<?php
session_start();
include"configcon.php";

$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT * FROM users WHERE fname= '$username' AND password='$password'";

$result=mysqli_query($db,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row["fname"]==$username && $row["password"]==$password)
{

$_SESSION["uname"]=$row["fname"];
	
	header('Location: http://localhost/confessions/new.php');
	

} 
else
{
	echo "failed to login";
}




?>


