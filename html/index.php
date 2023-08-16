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

    <link href="../css/indexCss.css" rel="stylesheet">

        <script>
            function showAlert()
            {
            alert('you have logged out');
            }
        </script>

    <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
    
    <header>
        <div class="container">
        
            <nav>
                <div id="logo"><a href="" title="Return Home">AS</a></div>
                <ul>
                    <li><a href="departmentsPage.php">Departments</a></li>
                    <li><a href="doctorsPage.php">Doctors</a></li>
                    <li><a href="appointmentsPage.php">Appointment</a></li>
                    <li><?php
                            if(isset($_SESSION["username"])){
                                $username = $_SESSION["username"]; 
                                print("<a href='logout.php' onclick ='showAlert();'>$username</a>");
                            //     <!-- <div class="dropdown">
                            //             <button><?php print("$username");</button>
                            //             <div class="dropdown-options">
                            //                 <a href="logout.php">Logout</a>
                            //             </div>
                            //      </div>
                            // <?php -->
                            }else
                            {
                                print('<a href="loginPage.php">login</a>');
                            } 
                        ?>
                    </li>
                </ul>
            </nav>
        </div>

    </header>

    <!-- <div id="banner">
        <div class="container">
            <article>
                <p>Making Health </p>
                <p>Care Better</p>
                <p>Together<span>.</span></p>
            </article>
             <a href="#footerContactUs">Contact Us</a>
            <a href="#emergency">Emergency</a> 
        </div>
    </div> -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..\images\aa.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\images\cc.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..\images\bb.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <div class="container">

       <div class="content clearfix">
        <section id="aboutUs">
            <h3>About us<span>:</span></h3>
            <p>
                COVID-19 has revealed how vulnerable the health care industry is to change and its need for structural and technological transformation.
                 In the future of health, we expect six key areas—data sharing, interoperability, equitable access, empowered consumers, behavior change,
                  and scientific breakthrough—to collectively transform the existing health system from treatment-based reactionary care to prevention and well-being.
                   The traditional boundaries of the industry will dissolve and new roles
                    will emerge in the future of health as exponential innovation propels the industry towards 2040.
            </p>

            <p>Explore what the future of health could look like—a dramatic transformation driven by new business models, emerging technologies,
                 and highly engaged consumers</p>
                 
        </section>

        <section id="location">
            <h3>Address<span>:</span></h3>
            <address>
                <ul>
                    <li>M.G Road</li>
                    <li>Mangalore <span>-</span> 575003</li>
                </ul>
            </address>
        </section>
       </div>

    </div>

    <div id="servicesBg">
        <div class="container">

           <div id="services">
                <div class="servicesBox rounded">
                    <h3>Primary Care</h3>
                    <p>First level of contact between individuals and families with the health system.Skip the waiting room.Consult with a doctor.</p>
                </div>

                <div class="servicesBox rounded">
                    <h3>Emergency</h3>
                    <p>Modern Emergency Departments managed by qualified Emergency Physicians and nurses, trained specifically for providing emergent care to save a life or limb.</p>
                </div>

                <div class="servicesBox rounded">
                    <h3>Online Appointment</h3>
                    <p>Eliminate booking hassle with AS Healthcare's online appointment scheduling software that includes 24x7 booking</p>
                </div>
           </div>

        </div>
    </div>

    <div id="gallery">
        <div class="container">
            <h3>Gallery<span>:</span></h3>
            <div id="galleryBox">
                <div class="galleryImg rounded">
                    <img src="../images\32011821.jpg" width="300px" height="150px" class="img-fluid" alt="gallery image">
                </div>

                <div class="galleryImg rounded">
                    <img src="../images\24264360.jpg"  alt="gallery image">
                </div>

                <div class="galleryImg rounded">
                    <img src="../images\43695595.jpg"  alt="gallery image">
                </div>

                <div class="galleryImg rounded">
                    <img src="../images\21245929.jpg"  alt="gallery image">
                </div>


                <div class="galleryImg rounded">
                    <img src="../images\42237956.jpg"  alt="gallery image">
                </div>

                <div class="galleryImg rounded">
                    <img src="../images\35514462.jpg"  alt="gallery image">
                </div>

                <div class="galleryImg rounded">
                    <img src="../images\30167397.jpg"  alt="gallery image">
                </div>

                <!-- <div class="galleryImg">
                    <img src="../images\32011821 (1).jpg"  alt="gallery image">
                </div> -->

                </div>
            </div>
        </div>

    </div>

    <div class="container">
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