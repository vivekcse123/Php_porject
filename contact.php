<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
 
if(!$con)
{
    die("connection to this database due to".mysqli_connect_error());
}
//echo "Connection is successful";
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['msg'];
$sql = "INSERT INTO `contact_us` (`id`, `Name`, `Email`, `Mobile`, `Message`) VALUES (NULL, '$name', '$email', '$mobile', '$message');";

if($con->query($sql)==true)
{
    $insert=true;
}
else{

    echo  "ERROR: $sql <br> $con->error";
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
    <title>S.M.S | CONTACT US</title>
    <link rel="stylesheet" href="contact.css">
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
    <h2>Contact Us</h2>
     <p id="ph"><a href="school_home.html" id="hom">Home Page </a> <font> - Contact Us</font></p>
     <br><br><br>
     <h2 id="sec">Contact Us Information</h2>
     <div class="contact">
         <form>
         <h3>Contact Us | Get In Touch: </h3><br>
         <span id="info">All fields are requried</span>
         <br>
         <input type="text" name='name' id='name' placeholder="Your name" required>
         <br>
         <input type="email" name='email'  id="mail" placeholder="Your email" required>
         <br>
         <input type="number" name='mobile' id='mobile' placeholder="your number" required>
         <br><br>
         <textarea  name='msg' placeholder="Message....." id='msg' required></textarea>
         <br>
         <button type="submit" id="contact_btn" onclick="Contact()">Submit</button>
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
            <input type="email" id="data" placeholder="email address">
            <button type="button" id="subs_btn">Subscribe</button>
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
         function Contact()
         {
             location.replace('contact.php');
         }
         function Teacher()
         {
             location.replace('teacher.php');
         }
         function Contact()
         {
             var name = document.getElementById("name").value;
             var email = document.getElementById("mail").value;
             var mobile = document.getElementById("mobile").value;
             var msg = document.getElementById("msg").value;
             if(name=="" || email=="" || mobile=="" msg=="")
             {
                 alert("Plese fill all the required area...!");
             }
             else{
                 alert("Thanks for contact us we...!");
             }
         }
     </script>
</body>
</html>