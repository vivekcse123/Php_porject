<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login | Page</title>
</head>
<?php
$uname = $password =$check = "";
$username_error = $password_error = $check_error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
  if(empty($_POST['uname']))
    {
         $username_error = "Name is mandatory";
    }
    else{
        $uname = test_input($_POST['uname']);
    }
    if(empty($_POST['password']))
    {
        $password_error = "Password is mandatory";
    }
    else{
        $password = test_input($_POST['password']);
    }
    if(empty($_POST['check']))
    {
        $check_error = "Check me";
    }
    else
    {
        $check = test_input($_POST['check']);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<body>
    <div class="teacher">
        <h1>Login</h1>
    <form action="" method="POST">
        <input type="text" name="uname" value = "<?php echo $uname; ?>" placeholder="Username"><br>
        <span><?php echo $username_error; ?></span>
        <input type="password" name="password" value = "<?php echo $password; ?>" placeholder="Password"><br>
        <span><?php echo $password_error; ?></span>
        <input type="checkbox" name="check" value = "<?php echo $check; ?>"><label>Remember me</label>
        <span class="check"><?php echo $check_error; ?></span>
        <button type="submit" name="submit">Login</button>
        <p>Not a Member?<a href="#">Register Now</a></p>
</form>
    </div>
</body>
</html>