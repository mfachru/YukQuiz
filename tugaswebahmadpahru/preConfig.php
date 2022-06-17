<?php
require 'config.php';
if (!$host) die("Connection failed: " . mysqli_connect_error());

$errors = [];
$success = [];

$sql1 = "CREATE TABLE IF NOT EXISTS user (
            email varchar(255) NOT NULL PRIMARY KEY,
            passwords varchar(255) NOT NULL,
            username varchar(255) DEFAULT NULL,
            about_me varchar(255) DEFAULT NULL
        )";

$sql2 = "INSERT INTO user (`email`, `passwords`, `username`, `about_me`) VALUES
        ('admin@root', 'admin', NULL, NULL)";

$sqls = [$sql1, $sql2];

foreach($sqls as $k => $sql){
    $query = @$host->query($sql);

    if(!$query) $errors[] = "Table $k : Creation failed ($host->error)";
    else        $success[] = "Table $k : Creation success";
}

foreach($errors as $msg) echo "$msg <br>";
?>