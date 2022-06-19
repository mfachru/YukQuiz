<?php
session_start();
require 'updateSession.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="unila.ico"/>
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
        <img class="profileimg" src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2022/05/gaten-matarazzo-stranger-things.jpg" alt="John" style="width:100%">
        <h1 class="profilename" ><?php echo $_SESSION['username']?></h1>
        <p class="title"><i><?php echo $_SESSION['about_me']?></i></p>
        <p class="pr1" ><button name="delete" onclick="location.href = 'update.php';" class="buttonprofile" >Update Account</button></p>
        <p><button onclick="location.href = 'delete.php';" class="buttonprofile" >Delete Account</button></p>
    </div>
</body>
</html>