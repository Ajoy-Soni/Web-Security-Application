<?php

require '../includes/header.php';

$servername = "localhost";
$dbUser = "root";
$dbPswd = "";
$dbName = "security_testing";

$conn = mysqli_connect($servername, $dbUser, $dbPswd, $dbName);
if (!$conn) {
    die("Could not connect to database : " . mysqli_connect_error());
}

$sql = "DROP DATABASE IF EXISTS security_testing;";
mysqli_query($conn, $sql);
mysqli_close($conn);

require '../setup/data.php';
?>

<main>
    <div id="style-button">
        <p class="links"><a href="../homepage/main.php" class="button"> Start testing !!</a></p>
    </div><br><br>
    <p style="text-align: center; font-size: 18px;">
        Database Dropped successfully <br>
        Database Created successfully <br>
        testingTable created successfully <br>
        dummyTable created successfully <br>
        commentSection table created successfully <br>
        data inserted into testingTable successfully <br>
        !! RESET DONE READY FOR TESTING !!
    </p>
</main>

<?php
require '../includes/footer.php';
?>