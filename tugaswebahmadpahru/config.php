<?php
try{
    $hosting = mysqli_connect("localhost", "root", "");
    mysqli_query($hosting, "CREATE DATABASE IF NOT EXISTS uap_web");
    $host = mysqli_connect("localhost", "root", "", "uap_web");
}
catch(Exception $e){
    echo "Connection failed: " . mysqli_connect_error();
}
?>