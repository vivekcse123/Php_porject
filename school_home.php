<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.M.S | HOME</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <i class="fa fa-envelope"> vermavivek0402@gmail.com</i>
        <i class="fa fa-phone">+91 8420608353</i>
        <a href="login.html">Login</a><font>|</font><a href="signin.php">Register</a>
    </div>
    <div class="navigation">
        <h1>S.M.S</h1>
        <a href="school_home.php">Home</a>
        <a href="school_home.php">Pages</a>
        <a href="courses.html">Courses</a>
        <a href="event.html">Events</a>
        <a href="blog.html">Blog</a>
        <a href="contact.php">Contact</a>
        <button type="submit" id="btn" onclick="Teacher()">Be Teacher</button>
    </div>
    <div class="home">
        <p>Points</p>
        <h2>Education is key <br>to success</h2><br>
    </div>
    <br><br>
    <div class="pages">
        <h1>School Academic Informations </h1>
        <p id='info'>Admissions Information</p>
        <P id='info1'>Admissions Process</P>
        <ul>
            <li>First chose the class where you want to take admision.</li>
            <li>Kindly read all the information regarding that.</li>
            <button type="submit" id="btn_reg" onclick="Register()">Register</button>
        </ul>
        <div class="inter">
            <h6>Apply Online</h6>
        </div>
        <div class="high">
            <h6>Notification</6>
        </div>
    </div>
    <div class="kids">
        <h1>Kids Apply for new Admissions</h1><br>
        <p>Currently we are taking admission of kid's from 1-10 from respective year 2020 </p>
        <button type="submit" name="kids" id="kid_btn" title="register now" onclick="Register()">Register Now</button>
    </div>
    <br>
    <div class="footer">
        <h1>SCHOOL MANAGEMENT<br>SYSTEM</h1>
        <label>Education is the part of life</label>
        <br>
        <h5>Galleries</h5>
        <br><br>
        <img src="student1.jpg" id="img1">
        <img src="student2.jpg" id="img2">
        <img src="student3.jpg" id="img3">
        <img src="student4.jpg" id="img4">
        <div class="subs">
            <form action="" method="POST">
            <input type="email" id="data" name="email" placeholder="email address" required>
            <button type="button" id="subs_btn" onclick="Fill()">Subscribe</button>
            </form>
        </div>
        <div class="social">
            <font>Attached with social : </font>
            <a href="#" class="fa fa-facebook" id="face" title="facebook"></a>
            <a href="#" class="fa fa-linkedin" id="link" title="linkedin"></a>
            <a href="#" class="fa fa-instagram" id="insta" title="instagram"></a>
        </div>
        <div class="para">
            <p id="para"><font> S.M.S </font> - &copy copyright 2021. Design by <font>Vivek Verma</font></p>
        </div>
    </div>
    <script>
         function Teacher()
        {
            location.replace("teacher.php");
        }
        function Register()
        {
            location.replace("registration_page.php");
        }
        function Fill()
        {
                var emailTest=document.getElementById('data');
                var email=emailTest.value;
                var emailmatch=/^([a-z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,5})(.[a-z]{2,5})$/;
                 if(!emailmatch.test(email))
                    {
                        alert("Email is not valid");
                        document.getElementById('data').value="";
                        return false;
                    }
                else if(email=="")
                {
                    alert("Please enter email..!");
                    document.getElementById('data').value="";
                }
                else{
                    alert("Thansk for subscribing");
                    document.getElementById('data').value="";
                }
            }
    </script>
</body>
</html>
<?php
$insert=false;
if(isset($_post['email']))
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server , $username, $password);

if(!$con)
{
    die("Connecting to this database due to" .mysqli_connect_error());
}
$email = $_POST['email'];
$sql =  "INSERT INTO `subs` (`email`) VALUES (NULL, '$email');";

if($con->query($sql)==true)
{
    //echo "<p>Successful inserted <p>";
    $insert=true;
}

else
{
    echo "Error $sql <br> $con->error";
}
$con->close();
}
?>