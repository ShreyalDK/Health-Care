<?php 

session_start();
$con = mysqli_connect("localhost","root","");
if(!$con){
    print("fail".mysqli_connect_error());
}

mysqli_select_db($con,"as_healthcare");

$AppointmentId = $_POST["appointmentId"];

$sqlQApp = "select * from appointments where appointment_id ='$AppointmentId'";
$reslutQApp = mysqli_query($con,$sqlQApp);

$rowQApp = mysqli_fetch_array($reslutQApp);
                
$username = $rowQApp["username"];
$pname = $rowQApp["pname"];
$date = $rowQApp["date"];
$time = $rowQApp["time"];
$reason = $rowQApp["reason"];
$email = $rowQApp["email"];


$sqlDCanApp = "delete from appointments where appointment_id ='$AppointmentId'";

mysqli_query($con,$sqlDCanApp);

$to = "$email";
//Email subject
$subject = "Your medical appointment cancelled-AS Healthcare";
//Email message

$message = "Hi $username, \n\n\n";
$message .= "Thank you for choosing AS Healthcare\n\n";
$message .= "Appointment cancelled by $username \n";
$message .= "Patient name: $pname\n";
$message .= "Reason: $reason\n";
$message .=  "Date: $date\n";
$message .=  "Time: $time\n";
$message .=  "We at AS Healthcare hope $pname is feeling better";

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

mysqli_close($con);
header("Location: appointmentsPage.php");
exit();

?>
