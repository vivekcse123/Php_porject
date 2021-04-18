<?php
$insert=false;
if(isset($_post['name']))
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server , $username, $password);

if(!$con)
{
    die("Connecting to this database due to" .mysqli_connect_error());
}
$uname = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$sql =  "INSERT INTO `teacher_register`.`register`( `Name`, `Email`, `Mobile`) VALUES (NULL, '$name', '$email','$mobile')";

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.M.S | Be Teacher</title>
    <link rel="stylesheet" href="teacher.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="page">
        <h2>Become a Teacher</h2>
        <a href="school_home.html">Home page</a> <span class = "msg"> - Become a Teacher </span>
    </div> 
    <div class="apply">
        <h1>Apply as Instructor </h1>
        <p>Here is some important opportunity for you</p>
        <br>
        <img src="neonbrand-1-aA2Fadydc-unsplash.jpg">
    </div>
    <br>
    <div class="register">
        <form action="teacher.php" method="POST">
        <h4>Register To <br> become a teacher</h4><br>
         <label>For login Please fill out of this form </label>
        <br>
        <input type="text" name="name" placeholder="Your name" required>
        <br><br>
        <input type="email" name="email" placeholder="Your email address" required>
        <br><br>
        <input type="number" name="mobile" placeholder="Your phone number" required>
        <br><br>
        <button type="submit" name='submit' id='btn_1'>Register</button>
        </form>
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
            <input type="email" id="subs" placeholder="email address">
            <button type="button" id="subs_btn">Subscribe</button>
        </div>
        <div class="social">
            <font>Attached with social : </font>
            <a href="#" class="fa fa-facebook" id="face" title="facebook"></a>
            <a href="#" class="fa fa-linkedin" id="link" title="linkedin"></a>
            <a href="#" class="fa fa-instagram" id="insta" title="instagram"></a>
        </div>
        <p id="para"><font> S.M.S </font> - &copy copyright 2021. Design by <font>Vivek Verma</font></p>
    </div>
    <script>
        function Teacher()
        {
            location.replace("teacher.php");
        }
    </script>
</body>
</html>