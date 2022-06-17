<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Register</title>
        <link rel="shortcut icon" href="unila.ico"/>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body class="loginbg">
        <div class="container">
          <h1>Register</h1>
            <form action="register.php" method="POST">
                <label>Email</label><br>
                <input type="email" name="email" required><br>
                <label>Password</label><br>
                <input type="password" name="passwords" required><br>
                <button name="register">Register</button>
                <p>Anda sudah punya akun? <a href="index.php">Login</a></p>
            </form>
        </div>     
    </body>
</html>

<?php
session_start();
require 'config.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];
    $cek = mysqli_query($host, "SELECT * FROM user WHERE email='$email' AND passwords='$passwords'");
    if(mysqli_num_rows($cek)>0){
        echo "<script>alert('Email sudah terdaftar\')</script>";
    } else {
        $ins = mysqli_query($host, "");
        header("location: index.php");
    }
}
?>