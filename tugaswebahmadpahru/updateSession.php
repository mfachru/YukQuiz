<?php
require 'config.php';
$sid = session_id();
$email = $_SESSION['email'];
$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($host, $sql);
while($row=mysqli_fetch_assoc($result)){
    $_SESSION['username'] = $row['username'];
    $_SESSION['passwords'] = $row['passwords'];
    $_SESSION['about_me'] = $row['about_me'];
}
?>