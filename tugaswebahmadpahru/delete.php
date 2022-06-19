<?php
require 'config.php';
session_start();
$email = $_SESSION['email'];
$sql = "DELETE FROM user WHERE email='$email'";
$result = mysqli_query($host, $sql);
if($result){
    session_destroy();
    header("Location: index.php");
}
?>