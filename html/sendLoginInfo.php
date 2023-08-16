<?php 

session_start();

$con = mysqli_connect("localhost","root","");
if(!$con){
    print("fail".mysqli_connect_error());
}

mysqli_select_db($con,"as_healthcare");

// if(isset($_POST["username"]) && isset($_POST["password"])){

//     function validate($data){
//         $data = trim($data);
//         $data = stripcslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }
// }

function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST["username"]);
$password = validate($_POST["password"]);

if(empty($username)){
    header("Location: LoginPage.php?error=Username field empty");
    exit();
}
else if(empty($password)){
    header("Location: LoginPage.php?error=Password field empty");
    exit();
}

$sql = "select * from user where username='$username' and password='$password'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row["username"] === $username && $row["password"]===$password){
        $_SESSION["username"] = $row["username"];
        header("Location: index.php");
        exit();
    }
}
else{
    header("Location: LoginPage.php?error=Incorrect username or password");
    exit();
}

?>
