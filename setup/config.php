
<?php
$servername = "localhost";
$dbUser = "root";
$dbPswd = "";
$dbName = "security_testing";

$conn = mysqli_connect($servername, $dbUser, $dbPswd);
if (!$conn) {
    die("Could not connect to database : " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS security_testing";
if (!mysqli_query($conn, $sql)) {
    die("Could not create database");
} 
mysqli_close($conn);

$conn = mysqli_connect($servername, $dbUser, $dbPswd, $dbName);
if (!$conn) {
    die("Could not connect to database : " . mysqli_connect_error());
}
$sql = "CREATE TABLE IF NOT EXISTS testingTable (
            ID INT PRIMARY KEY AUTO_INCREMENT,
            fullName VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            pass VARCHAR(50) NOT NULL
        )";
mysqli_query($conn, $sql);
$sql = "CREATE TABLE IF NOT EXISTS dummyTable (
            ID INT PRIMARY KEY AUTO_INCREMENT
        )";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS commentSection (
    fullName VARCHAR(50),
    comment VARCHAR(255)
)";
mysqli_query($conn, $sql);
