<!DOCTYPE html>
<?php 
session_start(); 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="unila.ico"/>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="topnav">
        <a href="home.html">Home</a>
        <a href="quiz.html">Quiz</a>
        <a class="active" href="profile.php">Profile</a>
        <a href="index.php">Log Out</a>
    </div>
    <h2 style="text-align:center">Your Profile</h2>
    <div class="card">
        <p class="title">Email</p>
        <p class="title"><i><?php echo $_SESSION['email']?></i></p>
        <p class="title">Password</p>
        <input type="password" name="password" class="inputprofile" value="<?php echo $_SESSION['passwords']?>">
        <h1 class="profilename" >Username</h1>
        <input type="text" name="username" class="inputprofile" value="<?php echo $_SESSION['username']?>">
        <h1 class="profilename" >About Me</h1>
        <input type="text" name="about_me" class="inputprofile" value="<?php echo $_SESSION['about_me']?>">
        <p class="pr1" ><button name="updates" onclick="location.href = 'update.php';" class="buttonprofile" >Update Account</button></p>
    </div>
</body>

<?php
require 'config.php';
if(isset($_POST['updates'])){
    $email = $_SESSION['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $about_me = $_POST['about_me'];
    $sql = "UPDATE user SET username='$username', passwords='$password', about_me='$about_me' WHERE email='$email'";
    if(mysqli_query($host, $sql)){
        echo "<script>alert('Update Successful')</script>";
        header("Location: profile.php");
    } 
}
?>