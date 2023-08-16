<?php
session_start();

$con = mysqli_connect("localhost","root","");
if(!$con){
    print("fail".mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];

if(empty($username)){
    header("Location: signUpPage.php?error=Username field empty");
    exit();
}
else if(empty($password)){
    header("Location: signUpPage.php?error=Password field empty");
    exit();
}

mysqli_select_db($con,"as_healthcare");

try{
    mysqli_query($con, "INSERT INTO user VALUES ('$username', '$password')");
}
catch(Exception $e){
    header("Location: signUpPage.php?error=Choose different username");
    exit();
}

mysqli_close($con);

$_SESSION["username"] = $username;
header("Location: index.php");
exit();
?>