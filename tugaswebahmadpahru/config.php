<?php
try{
    $hosting = mysqli_connect("localhost", "id19124755_root", "h3jpWWvodgC!CRLY%Nhy");
    mysqli_query($hosting, "CREATE DATABASE IF NOT EXISTS id19124755_uap_web");
    $host = mysqli_connect("localhost", "id19124755_root", "h3jpWWvodgC!CRLY%Nhy", "id19124755_uap_web");
}
catch(Exception $e){
    echo "Connection failed: " . mysqli_connect_error();
}
?>