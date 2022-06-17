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
                <input type="email" required><br>
                <label>Password</label><br>
                <input type="password" required><br>
                <button name="register">Register</button>
                <p>Anda sudah punya akun? <a href="index.php">Login</a></p>
            </form>
        </div>     
    </body>
</html>

<?php
session_start();
if(isset($_POST['login'])){
    header("Location: home.html");
}
?>