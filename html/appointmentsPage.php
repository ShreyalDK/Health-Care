<?php 
    session_start();
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        print("fail".mysqli_connect_error());
    }

    mysqli_select_db($con,"as_healthcare");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/appointmentsPageCss.css" rel="stylesheet">

    <script type="text/javascript">
        function showAlert()
        {
            // alert();
            var pname=document.getElementById("pnameId").value;
            var reason = document.getElementById("reasonId").value;
            var date = document.getElementById("dateId").value;
            var time = document.getElementById("timeId").value;
            var mail =document.getElementById("mailId").value;
            if(pname=="" || reason=="" || date=="" || time=="" || mail==""){
                alert('Please fill all the fields');
                event.preventDefault();
            }
            return true;
        }
    </script>

    <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Appointments</title>
</head>
<body>

    <header>

        <div class="container">

            <nav>
                <div id="logo"><a href="index.php" title="Return Home">AS</a></div>
                <p class="headerP">APPOINTMENT</p>
                <?php 
                    if(isset($_SESSION["username"])){
                        $username = $_SESSION["username"];
                        ?>
                        <p class="username headerP">  <span class="pinkAcc">:</span> <?php echo"$username"; ?></p>
                        <?php
                    }
                ?>
            </nav>

        </div>
    </header>

    <?php 

        if(isset($_SESSION["username"])){
        
    ?>
            <div class="container">

                <div class="row content">

                    <div class="col-sm-6 appCon">

                        <h3>Your Appointments<span class="pinkAcc">:</span></h3>
                        <?php
                            $username = $_SESSION["username"];
                            $sql = "select * from appointments where username='$username' order by appointment_id DESC";
            
                             $result = mysqli_query($con,$sql);

                             if(mysqli_num_rows($result) === 0){
                                ?>
                                        <h4>No Appointmets<span class="pinkAcc">.</span></h4>
                                <?php
                             }
                             else{
                        ?>
                        <h4 style="margin-top: 25px;">Upcoming Appointments<span class="pinkAcc">:</span></h4>
                        <?php
                                
                                while($row = mysqli_fetch_array($result))
                                {
                                    $pname = $row['pname'];
                                    $reason = $row['reason'];
                                    $date = $row['date'];
                                    $time = $row['time'];
                                    $AppointmentId = $row['appointment_id'];
                                    $d=strtotime("today");
                                    date_default_timezone_set('Asia/Kolkata');
                                    $curDate =  date("Y-m-d", $d);
                                    if($curDate<$date || $curDate==$date)
                                    {
                                    
                                ?>   
                                <div class="card w-80 text-black mb-3">
                                    <!-- <div class="card-header bg-primary">Patient name: <?php echo"$pname"; ?></div> -->
                                    <div class="card-body rounded">
                                        <h5 class="card-title">Patient name<span class="pinkAcc">:</span> <?php echo"$pname"; ?></h5>
                                        <hr />
                                        <p class="card-text"><span>Reason<span class="pinkAcc">:</span> </span><?php echo"$reason"; ?></p>
                                        <p class="card-text"><span>Date<span class="pinkAcc">:</span> </span><?php echo"$date"; ?></p>
                                        <p class="card-text"><span>Time<span class="pinkAcc">:</span> </span><?php echo"$time"; ?></p>
                                        <?php 
                                            if($curDate == $date ){
                                                ?> 
                                                <p class="appToday">TODAY</p>
                                        <?php
                                        }
                                        ?>
                                        <form action="cancelAppointment.php" method="post">
                                            <button type="submit" value="<?=$AppointmentId;?>" name="appointmentId" class="btn text-white" style="background: #FF69B4; font-weight: bolder;">CANCEL</button>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                            ?>
                            <h4 style="margin-top: 25px;">Old Appointments<span class="pinkAcc">:</span></h4>
                        <?php
                                
                                $username = $_SESSION["username"];
                            $sql = "select * from appointments where username='$username'";
            
                             $result = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    $pname = $row['pname'];
                                    $reason = $row['reason'];
                                    $date = $row['date'];
                                    $time = $row['time'];
                                    $d=strtotime("today");
                                    $curDate =  date("Y-m-d", $d);
                                    if($curDate > $date)
                                    {
                                    
                                ?>   
                                <div class="card w-80 text-black mb-3">
                                    <!-- <div class="card-header bg-primary">Patient name: <?php echo"$pname"; ?></div> -->
                                    <div class="card-body rounded">
                                        <h5 class="card-title">Patient name<span class="pinkAcc">:</span> <?php echo"$pname"; ?></h5>
                                        <hr />
                                        <p class="card-text"><span>Reason<span class="pinkAcc">:</span> </span><?php echo"$reason"; ?></p>
                                        <p class="card-text"><span>Date<span class="pinkAcc">:</span> </span><?php echo"$date"; ?></p>
                                        <p class="card-text"><span>Time<span class="pinkAcc">:</span> </span><?php echo"$time"; ?></p>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                             }
                                mysqli_close($con);
                            ?>
                    </div>
                    
                    <div class="col-sm-6 appForm">
                            
                            <h3>Book An Appointment<span class="pinkAcc">:</span> </h3>
                            <div class="bgImage"></div>
                            <?php if(isset($_GET["error"])) { ?>
                                <p class="errorMsg"> <?php print($_GET["error"]); ?> </p> 
                            <?php } ?>
                
                            <form action="sendAppointmentInfo.php" method="post" class="appFormF rounded" onsubmit="showAlert();"> 
                                <label >Patient name<span class="pinkAcc">:</span> </label> 
                                <input type="text" name="pname" class="input" id="pnameId">
                                <br>
                                <label >Reason<span class="pinkAcc">:</span> </label>
                                <input type="text" name="reason" class="input" id="reasonId">
                                <br>
                                <label >Date<span class="pinkAcc">:</span> </label>
                                <input type="date" name="date" class="input" id="dateId">
                                <br>
                                <label >Time<span class="pinkAcc">:</span> </label>
                                <select name="time" id="timeId" class="input" id="timeId">
                                    <option value="8:00-10:00 A.M">8:00-10:00 A.M</option>
                                    <option value="10:00-12:30 A.M">10:00-12:30 A.M</option>
                                    <option value="2:00-4:00 P.M">2:00-4:00 P.M</option>
                                    <option value="4:00-6:00 P.M">4:00-6:00 P.M</option>
                                    <option value="6:00-8:30 P.M">6:00-8:30 P.M</option>
                                </select>
                                <br>
                                <label >Mail<span class="pinkAcc">:</span> </label>
                                <input type="mail" name="email" class="input" id="mailId">
                                <br>
                                <div class="submitBtn">
                                    <input type="submit" value="Book Appointment" class="input rounded">
                                </div>
                            </form>

                            <div class="emergencyDiv"> 
                                <div id="emergency" class="rounded">
                                    <p>EMERGENCY</p>
                                    <p>102,104,108,2424722</p>
                                </div>
                            </div>
                    </div>


                </div>


            </div>


    <?php
        }
        else{
           ?>
            <div class="container">
                <h2 style="display: block; text-align: center; margin-top: 40px;">You have to Login or Sign Up to Book <span style="color: #20A0D8;">Appointments</span><span style="color: #FF69B4; font-weight: bolder; font-size: larger;">.</span></h2>
                <div class="NoLoginContent" style="margin-top: 40px;">
                    <div class="card shadow-lg" style="width: 24rem; margin-right: 30px; overflow: hidden;">
                        <img src="../images/Screenshot (12).png" class="card-img-top" alt="Login">
                        <div class="card-body" style="text-align: center; background: #C6DCE4; overflow: hidden; z-index:9999;">
                            <h5 class="card-title">Already A User?</h5>
                            <a href="loginPage.php" class="btn btn-primary" style="font-weight: bolder;">LOGIN</a>
                        </div>
                    </div>
    
                    <div class="card shadow-lg" style="width: 24rem; margin-left: 30px; overflow: hidden;">
                        <img src="../images/Screenshot (13).png" class="card-img-top" alt="Sign Up">
                        <div class="card-body" style="text-align: center; background: #F2D1D1; overflow: hidden; z-index:9999;">
                            <h5 class="card-title">New User?</h5>
                            <a href="signUpPage.php" class="btn text-white" style="background: #FF69B4; font-weight: bolder;">SIGN UP</a>
                        </div>
                    </div>
    
                </div>


            </div>

            <div class="emergencyDiv"> 
                                <div id="emergency" class="rounded">
                                    <p>EMERGENCY</p>
                                    <p>102,104,108,2424722</p>
                                </div>
                            </div>
           <?php
        }
    ?>

    <footer id="footerContactUs">
        <div class="container">
            <div id="copyright">
                    <p>ashealthcare190@gmail.com</p>
                    <p>+91 9999-888888</p>
                    <p>AS &copy; 2022 <strong>Abhishek Shreyal</strong></p>
                </div>
        </div>
    </footer>
    
</body>
</html>