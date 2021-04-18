<?php
$insert = false;
if(isset($_POST['fname'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
 
if(!$con)
{
    die("connection to this database due to".mysqli_connect_error());
}
//echo "Connection is successful";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$sql = "INSERT INTO `signin_page` . `sign_in_page` (`First Name`, `Last Name`, `Email`, `Mobile No`) VALUES (NULL, '$fname', '$lname', '$email', '$mobile')";

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
    <link rel="stylesheet" href="sign.css">
    <title>S.M.S | Signin</title>
</head>
<body>
    <div class="cut"><button type="reset" id="reset" onclick="Cut()">×</button></div>
    <div class="login_page">
        <button type="button" id='btn1' onclick="Login()">Login</button><font>|</font>
        <button type="button" id='btn2' onclick="Sign()">Create New Account</button>
        <br><br>
        <form action="signin.php" method="POST">
        <input type="text" name='fname' placeholder="First name" required><br><br>
        <input type="text" name='lname' placeholder="Last name" required><br><br>
        <input type="email" name='email' placeholder="Email" required><br><br>
        <input type="number" name='mobile' placeholder="Mobile" required><br><br>
        <input type="checkbox" required><label>I agree with the Terms & Conditions of Registration section</label>
        <button type="submit" name='submit' id='btn3' onclick = Signin()>Create New Account</button>
        <br><br>
        </form>
    </div>
    <script>
        function Sign()
        {
            location.replace("signin.php");
        }
        function Login()
        {
            location.replace("login.html");
        }
        function Cut()
        {
            location.replace("school_home.php");
        }
    </script>
</body>
</html>