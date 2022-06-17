<?php
try{
    $host = mysqli_connect("localhost", "root", "", "uap_web");
}
catch(Exception $e){
    try{
        $hosting = mysqli_connect("localhost", "root", "");
        mysqli_query($hosting, "CREATE DATABASE uap_web");
    }
    catch(Exception $e){
        echo "Connection failed: " . mysqli_connect_error();
    }
}
?>