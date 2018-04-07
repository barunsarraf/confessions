<?php
include "configcon.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<title>Sent Messages</title>

</head>





<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Confessions</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="new.php">Home</a>
                    <a class="mdl-navigation__link" href="message.php">Messages</a>
                    <a class="mdl-navigation__link" href="aboutus.php">About Us</a>
                     <a class="mdl-navigation__link" href="help.php">Help</a>
                    
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"><?php $un=$_SESSION["uname"]; 
$query="SELECT fname,lname FROM users WHERE fname= '$un' ";

$result=mysqli_query($db,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

echo "Hii...".$row["fname"];
echo " ".$row["lname"]; ?>
</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="editprofile.php">Edit Profile</a>
                <a class="mdl-navigation__link" href="editprofile.php">Sent Messages</a>
                <a class="mdl-navigation__link" href="signout.php">Sign Out</a>

            </nav>
        </div>
    </div>



<br>
<br>
<br>
<br>

<?php
$sd=$_SESSION["uname"];
$res=mysqli_query($db,"SELECT description,mdate FROM messages WHERE sender='$sd' AND mdate >= CURDATE()");
?>
<h4 align="center">Messages sent so far...</h4>
<?php

while ($r=mysqli_fetch_array($res,MYSQLI_ASSOC))
{ 

?>
<br>


<?php
echo "Message : ".$r["description"];
echo "------".$r["mdate"];	
?>
<hr>


<p>
	<?php
}	



 ?>











</body>
</html>


