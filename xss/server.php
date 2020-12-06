<?php
$inputName = $_GET["input1"];
$inputComment = $_GET["input2"];

$conn = mysqli_connect('localhost', 'root', '', 'security_testing');
if ($conn) {
    $pre_stmt = $conn->prepare("INSERT INTO commentSection (fullName, comment) VALUES (?,?)");
    $pre_stmt->bind_param("ss", $inputName, $inputComment);

    if ($pre_stmt->execute()) {
        echo "Comment Added";
    } else {
        echo "Error!!";
    }
}
mysqli_close($conn);
