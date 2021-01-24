<? php
include('process.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN </title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<nav>
<img src="logo1.jpg" class="logo">
            <ul><li><a href="Main.htm">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="login.php">LOGIN</a></li>
            
            </ul>
        </nav>
    <div class="loginbox">
        <form action="process.php" method="POST">
        <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form>
            <p>Registration Number</p>
            <input type="text"  name="reg_num" placeholder="Enter Registration Number">
            <p>Mobile Number</p>
            <input type="password"  name="phn_num" placeholder="Enter Mobile number">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forgot Password??</a><br>
            <a href="reg1.php">Don't have an account</a>
        </form>

    </div>
</body>