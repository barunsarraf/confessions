<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<TITLE>Login</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>





<body>

 

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Confessions</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="">Home</a>
                    <a class="mdl-navigation__link" href="aboutus.php">About Us</a>
                     <a class="mdl-navigation__link" href="help.php">Help</a>
                    
                </nav>
            </div>

           
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
         <form action="loginprocess.php" method="post">

                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <br>
                <br>
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                
                <br><br>
                <input type="submit" class="btn btn-primary" value="Login">
            <p>Don't have an account? <a href="registration.php">Sign up now</a>.</p>
        </form>
        
    </div>

    








</body>
</html>


