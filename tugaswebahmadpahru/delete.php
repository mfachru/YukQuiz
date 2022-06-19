<?php
require 'config.php';
session_start();
$email = $_SESSION['email'];
$sql = "DELETE FROM user WHERE email='$email'";
$result = mysqli_query($host, $sql);
if($result){
    session_destroy();
    echo "<script>alert('Account Deleted')</script>";
    header("Location: index.php");
}
?>