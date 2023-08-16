<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">

    <link href="../css/loginStyle.css" type="text/css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div id="background_img" > </div>
    
    <div class="loginForm">
        <a href="index.php"><img src="../images/LogoLogin.png" alt="logo" width="200px" height="200px"></a>
       
        <div id="emergency">
            <p>EMERGENCY</p>
            <p>102,104,108,2424722</p>
       
        </div>

        <?php if(isset($_GET["error"])) { ?>
            <p class="errorMsg" style="color: #FF69B4; font-weight: bolder;  font-size:large;"> <?php print($_GET["error"]); ?></p> 
        <?php } ?>
       
        <h3>Login<span>.</span></h3>
       

        <form action="sendLoginInfo.php" method="post">
            <label>Username<span><b>:</span></label>
            <input type="text" id="username_text" name="username">
            <label>Password<span>:</span></label>
            <input type="password" id="userPassword" name="password">
            <input type="submit" value="Login" id="loginButton">
        </form>

        <p>Dont have an account? <a href="signUpPage.php">Sign up</a></p>

    </div>

</body>
</html>