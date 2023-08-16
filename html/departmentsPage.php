<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/departmentsCss.css" rel="stylesheet">
            <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Departments</title>
</head>
<body>
    
<header>

<div class="container">

    <nav>
        <div id="logo"><a href="index.php" title="Return Home">AS</a></div>
        <p class="headerP">DEPARTMENTS</p>
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
<h2 style="text-align: center; margin-top: 20px;">Our Various <span style="color:#20A0D8; ; font-weight: bolder;">Departments</span><span style="color: #FF69B4; font-weight: bolder; font-size: larger;">.</span></h2>
<div class="container deptInfo" style="margin-top: 30px;">
    <div class="card mb-3 shadow-lg" style="width: 40rem; margin: 25px ; overflow: hidden;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/cd.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 text-white" style="background: #20A0D8; overflow: hidden; z-index: 9999;">
            <div class="card-body">
              <h5 class="card-title">Cardiology</h5>
              <p class="card-text">The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure,valvular heart disease and electrophysiology.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 shadow-lg" style="width: 40rem; margin: 25px; overflow: hidden;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/ent1.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 text-white" style="background: #20A0D8; overflow: hidden; z-index: 9999;">
            <div class="card-body">
              <h5 class="card-title">Ent</h5>
              <p class="card-text">ENT specialists treat hearing, swallowing and speech, breathing and sleep issues, allergies and sinuses, head and neck, skin disorders, and more.</p>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="container deptInfo">

    <div class="card mb-3 shadow-lg" style="width: 40rem; margin: 25px; overflow: hidden;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/de.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 text-white" style="background: #20A0D8; overflow: hidden; z-index: 9999;">
            <div class="card-body">
              <h5 class="card-title">Dermatology</h5>
              <p class="card-text">Dermatology is the branch of medicine dealing with the skin. A dermatologist is a specialist medical doctor who manages diseases related to skin, hair, nails, and some cosmetic problems</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 shadow-lg" style="width: 40rem; margin: 25px; overflow: hidden;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/im.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8 text-white" style="background: #20A0D8; overflow: hidden; z-index: 9999;">
            <div class="card-body">
              <h5 class="card-title">Immunology</h5>
              <p class="card-text">Immunology is a branch of medicine and biology that covers the medical study of immune systems in humans, animals, plants and sapient species.</p>
            </div>
          </div>
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