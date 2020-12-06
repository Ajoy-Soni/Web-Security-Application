<?php
require '../includes/header.php';
?>

<main>
    <div id="style-button">
        <p class="links" style="padding: 30px;"><a href="../setup/home.php" class="button">First step --> Setup</a></p>
        <div style="border: 5px solid #e58703; padding: 20px;">
            <p class="links"><a href="#" class="button" style="background-color: black; color: white;">Top 3 Web Atacks</a></p>
            <p class="links"><a href="../injection/home.php" class="button">SQL Injection</a></p>
            <p class="links"><a href="../xss/home.php" class="button">Cross site scripting (XSS)</a></p>
            <p class="links"><a href="../csrf/home.php" class="button">Cross Site request forgery</a></p>
        </div>
    </div><br><br>
</main>

<?php
require '../includes/footer.php';
?>