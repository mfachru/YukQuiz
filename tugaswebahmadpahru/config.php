<?php
if (!$host = mysqli_connect("localhost", "root", "", "uap_web")) {
    $hosting = mysqli_connect("localhost", "root", "");
    mysqli_query($hosting, "CREATE DATABASE uap_web");
    if(!$hosting){
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
}
?>