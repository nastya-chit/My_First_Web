<?php
$server = "127.0.0.1";
$username = "root";
$password = "1234";
$db_name = "first";

$link = mysqli_connect($server, $username, $password);
if (!$link){
    die("Error connect" . mysqli_connection_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS $db_name";
if (!mysqli_query($link, $sql)) {
    echo "Error create DB". mysqli_error($link);
}

mysqli_close($link);


$link = mysqli_connect($server, $username, $password, $db_name);
$sql = "CREATE TABLE IF NOT EXISTS users( 
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(15) NOT NULL,
email VARCHAR(50) NOT NULL,
pass VARCHAR(20) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
    echo "Error create table users";
}

$sql = "CREATE TABLE IF NOT EXISTS posts( 
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(20) NOT NULL,
main_text VARCHAR(400) NOT NULL
)";

if (!mysqli_query($link, $sql)) {
    echo "Error create table posts";
}

mysqli_close($link);
?>

