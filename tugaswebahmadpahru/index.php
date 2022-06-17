<?php
require 'config.php';
require 'preConfig.php';
session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $passwords = $_POST['passwords'];

    $sql = "SELECT * FROM user WHERE email='$email' AND passwords='$passwords'";
    $result = mysqli_query($host, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['passwords'] = $row['passwords'];
            $_SESSION['about_me'] = $row['about_me'];
        }
        header("Location: home.html");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
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
                <input type="email" name="email" required><br>
                <label>Password</label><br>
                <input type="password" name="passwords" required><br>
                <button name="login">Log in</button>
                <p>Anda belum punya akun? <a href="register.php">Register</a></p>
            </form>
        </div>     
    </body>
</html>