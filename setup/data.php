<?php
require '../setup/config.php';
$sql = "INSERT INTO testingTable (fullName, email, pass) VALUES ('person1', 'abc1@xyz.com', 'password1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO testingTable (fullName, email, pass) VALUES ('person2', 'abc2@xyz.com', 'password2')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO testingTable (fullName, email, pass) VALUES ('person3', 'abc3@xyz.com', 'password3')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO testingTable (fullName, email, pass) VALUES ('person4', 'abc4@xyz.com', 'password4')";
mysqli_query($conn, $sql);
?>