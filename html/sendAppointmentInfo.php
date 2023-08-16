<?php 
    session_start();

    $con = mysqli_connect("localhost","root","");
    if(!$con){
        print("fail".mysqli_connect_error());
    }

    mysqli_select_db($con,"as_healthcare");

    if(isset($_POST["pname"]) && isset($_POST["reason"]) && isset($_POST["date"]) & isset($_POST["time"]) && isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        $pname = $_POST["pname"];
        $reason = $_POST["reason"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $email = $_POST["email"];
        $sql = "INSERT INTO appointments (username,pname,reason,date,time,email) VALUES ('$username','$pname','$reason','$date','$time','$email')";

        try{
            mysqli_query($con,$sql);
        }
        catch(Exception $e){
            header("Location: appointmentPage.php?error=error");
            exit();
        }
    }

        $to = "$email";
        //Email subject
        $subject = "Your medical appointment-AS Healthcare";
        //Email message

        $message = "Hi $username, \n\n\n";
        $message .= "Thank you for choosing AS Healthcare\n\n";
        $message .= "Appointment booked by $username \n";
        $message .= "Patient name: $pname\n";
        $message .= "Reason: $reason\n";
        $message .=  "Date: $date\n";
        $message .=  "Time: $time";

        //Header information
        $headers = "From: AS Healthcare<ashealthcare190@gmail.com>\r\n";
        //Send email
        if(mail($to, $subject, $message, $headers)){
            mysqli_close($con);
            header("Location: appointmentsPage.php");
            exit();
        }
        else
        {
            mysqli_close($con);
            header("Location: appointmentsPage.php?error=MailError");
            exit();
        }
?>
