<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body class="loginbg">
        <div class="container">
          <h1>Login</h1>
            <form action="index.php" method="POST">
                <label>Username</label><br>
                <input type="email" required><br>
                <label>Password</label><br>
                <input type="password" required><br>
                <button name="login">Log in</button>
            </form>
        </div>     
    </body>
</html>

<?php
session_start();
if(isset($_POST['login'])){
    header("Location: beranda.php");
} else {
    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
}
?>