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
require_once 'config.php';
if(isset($_POST['register'])){
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];
    $cek = mysqli_query($host, "SELECT * FROM user WHERE email='$email'");
    if(mysqli_num_rows($cek)>0){
        echo "<script>alert('Email sudah terdaftar')</script>";
    } else {
        mysqli_query($host, "INSERT INTO user (email, passwords, username, about_me) 
        VALUES ('$email', '$passwords', 'Username Not Set', 'Status Not Set')");
        echo "<script>alert('Berhasil mendaftar')</script>";
        header("Location: index.php");
    }
}
?>