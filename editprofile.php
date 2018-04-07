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
                    <a class="mdl-navigation__link" href="new.php">Home</a>
                    <a class="mdl-navigation__link" href="message.php">Messages</a>
                    <a class="mdl-navigation__link" href="aboutus.php">About Us</a>
                     <a class="mdl-navigation__link" href="help.php">Help</a>
                    
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">
<?php $un=$_SESSION["uname"]; 
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
<br>
<br>
<br>
<br>



<?php
$un=$_SESSION["uname"];
?>




        <form action="editp.php" method="post">

                <br>
                <br>
                <label>Password</label>
                <input type="password" name="reg_password" class="form-control" value= "<?php include "configcon.php";
$query="SELECT password FROM users WHERE fname= '$un' ";

$result=mysqli_query($db,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC); echo $row["password"];?>">
               
                  <br><br>

                <label>Address</label>
                <input type="text" name="uuhostel" class="form-control"  value= "<?php include "configcon.php";
$query="SELECT address FROM users WHERE fname= '$un' ";

$result=mysqli_query($db,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC); echo $row["address"];?>">
                
                
                <br><br>
                <input name="update" type="submit" class="btn btn-primary" value="Update">

        
        </form>






  

</body>
</html>


