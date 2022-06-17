<?php
require 'config.php';
require 'preConfig.php';
session_start();
if(isset($_POST['login'])){
    header("Location: home.html");
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="shortcut icon" href="unila.ico"/>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body class="loginbg">
        <div class="container">
          <h1>Login</h1>
            <form action="index.php" method="POST">
                <label>Email</label><br>
                <input type="email" required><br>
                <label>Password</label><br>
                <input type="password" required><br>
                <button name="login">Log in</button>
                <p>Anda belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>     
    </body>
</html>