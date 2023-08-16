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
    <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php 

            if(isset($_SESSION["username"])){
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            
                            <?php
                                $username = $_SESSION["username"];
                                $sql = "select * from appointments where username='$username'";
            
                                $result = mysqli_query($con,$sql);
                            ?>
            
                            <table  cellspacing = "2" width="30%">
                            <tr>
                            <th>pname</th>
                            <th>reason</th>
                            <th>pname</th>
                            <th>date</th>
                            <th>time</th>
                            </tr>
                            <?php
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<tr align=center>";
                                    echo "<td>" . $row['pname'] . "</td>";
                                    echo "<td>" . $row['reason'] . "</td>";
                                    echo "<td>" . $row['date'] . "</td>";
                                    echo "<td>" . $row['time'] . "</td>";
                                    echo "</tr>";
                                }
                                mysqli_close($con);
                            ?>
                        </div>
            
                        <div class="col second">
                            
                            <?php if(isset($_GET["error"])) { ?>
                                <p class="error"> <?php print($_GET["error"]); ?> </p> 
                            <?php } ?>
                
                            <form action="sendAppointmentInfo.php" method="post"> 
                                <label >Patient name<span>:</span> </label> 
                                <input type="text" name="pname">
                                <label >Reason<span>:</span> </label>
                                <input type="text" name="reason">
                                <label >Date<span>:</span> </label>
                                <input type="date" name="date">
                                <label >Time<span>:</span> </label>
                                <select name="time" id="timeId">
                                    <option value="8:00-10:00 A.M">8:00-10:00 A.M</option>
                                    <option value="10:00-12:30 A.M">10:00-12:30 A.M</option>
                                    <option value="2:00-4:00 P.M">2:00-4:00 P.M</option>
                                    <option value="4:00-6:00 P.M">4:00-6:00 P.M</option>
                                    <option value="6:00-8:30 P.M">6:00-8:30 P.M</option>
                                </select>
                                <input type="submit" value="make appointment">
                            </form>
                        </div>
                    </div>
                </div> 
            <?php
            }
            else{
                echo "please login or signup to access";
            }
    ?>
    
</body>
</html>