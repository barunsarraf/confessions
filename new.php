
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

</head>





<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Confessions</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Home</a>
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
                <a class="mdl-navigation__link" href="sent.php">Sent Messages</a>
                <a class="mdl-navigation__link" href="signout.php">Sign Out</a>


            </nav>
        </div>
    </div>
<br>
<br>
<br>
<br>
   
   <style>

.demo-card-wide.mdl-card {
  width: 1200px;
  margin: 50px;
  padding: 50px
}
.demo-card-wide > .mdl-card__title {
  color:    #000000;
  height: 276px;
  background color:#000000 ;
}
.demo-card-wide > .mdl-card__menu {
  color:    #000000;
}
</style>


<br>

<div class="demo-card-wide mdl-card mdl-shadow--2dp" >
  <div class="mdl-card__menu">

   <form action="sendmessage.php" method="post">



                 <label>Username of reciever</label>
                <input type="text" name="rr" class="form-control">
                <br>
                <br>

                <label>Message</label>
                <input type="text" name="mm" class="form-control">
                
                <br><br>
                <input type="submit" class="btn btn-primary" value="Send">
            
    </form>


  </div>
</div>

</body>
</html>


