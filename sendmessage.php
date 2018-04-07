<?php
session_start();
include "configcon.php";
if(isset($_POST['rr'])){
    $rv = $_POST['rr'];
 } 
 if(isset($_POST['mm'])){
    $message= $_POST['mm'];
 }

 $sd=$_SESSION["uname"];


  $query_upload="INSERT INTO `messages`(`sender`, `description`, `reciever`, `mdate`) VALUES ('$sd','$message','$rv',
  NOW())";



mysqli_query($db,$query_upload);
header('Location: http://localhost/confessions/new.php');


   





?>























