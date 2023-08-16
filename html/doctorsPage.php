<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/DoctorsPage.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Doctors</title>
</head>
<body>

    <header>

        <div class="container">

            <nav>
                <div id="logo"><a href="index.php" title="Return Home">AS</a></div>
                <p class="headerP">DOCTORS</p>
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

    <h1 style="text-align: center; margin-top: 20px;">Our Special <span style="color: #FF69B4; font-weight: bolder;">Doctors</span><span style="color: #20A0D8; font-weight: bolder;font-size: larger;">.</span></h1>

    <div class="conatiner docInfo" style="margin-top: 50px;">
        <div class="card shadow-lg docCard" style="width: 20rem; margin-right: 10px; overflow: hidden;">
            <img src="../images/doc1.png" class="card-img-top" alt="Doctor">
            <div class="card-body text-white" style="background: #FF69B4; overflow: hidden; z-index: 9999;">
              <h3 class="card-text">DR.Anjali Hegde</h3>
               <p class="card-text" style="font-weight: bolder;">MBBS,MD<br>Cardiologist</p>
            </div>
          </div>

          <div class="card shadow-lg docCard" style="width: 20rem; margin-left: 10px; margin-right: 10px; overflow: hidden;">
            <img src="../images/doc2.png" class="card-img-top" alt="Doctor">
            <div class="card-body text-white" style="background: #FF69B4; overflow: hidden; z-index: 9999;">
                <h3>DR.John Sam </h3>
                <p style="font-weight: bolder;">MBBS,MD<br>General surgeon</p>
            </div>
          </div>

          <div class="card shadow-lg docCard" style="width: 20rem; margin-left: 10px; margin-right: 10px; overflow: hidden;">
            <img src="../images/doc3.png" class="card-img-top" alt="Doctor">
            <div class="card-body text-white" style="background: #FF69B4;overflow: hidden; z-index: 9999; ">
                <h3>DR.Karthik Shetty </h3>
                <p style="font-weight: bolder;">MBBS,MD<br>ENT Specialist</p>
            </div>
          </div>

          <div class="card shadow-lg docCard" style="width: 20rem; margin-left: 10px; overflow: hidden;">
            <img src="../images/doc4.png" class="card-img-top" alt="Doctor" >
            <div class="card-body text-white" style="background: #FF69B4;overflow: hidden; z-index: 9999;">
                <h3>DR.John Royson</h3>
                <p style="font-weight: bolder;">MBBS,MPHIL<br>Dermatologist</p>
            </div>
          </div>
    </div>

    <div class="container ">
        <div id="emergency" class="rounded">
            <p>EMERGENCY</p>
            <p>102,104,108,2424722</p>
       
        </div>
    </div>

    <footer id="footerContactUs">
        <div class="container">
            <div id="copyright">
                    <p>ashealthcare190@gmail.com</p>
                    <p>+91 9999-888888</p>
                    <p>AS &copy; 2022 <strong>Abhishek Shreyal</strong></p>
                </div><!-- end uncopyright -->
        </div>
    </footer>
</body>
</html>