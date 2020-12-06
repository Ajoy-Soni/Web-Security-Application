<?php

$inputId = $_GET["input1"];
$inputpswd = $_GET["input2"];

$conn = mysqli_connect('localhost', 'root', '', 'security_testing');
if ($conn) {
    $sql = "select * from testingTable where ID = '" . $inputId . "'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_row($result)) {
        echo "\nId : " . $row[0];
        echo " \nName : " . $row[1];
        echo " \nEmail : " . $row[2];
    } else {
        echo "No such record found!! Please try again.";
    }
}
mysqli_close($conn);
