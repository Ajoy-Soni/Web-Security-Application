<?php
require '../includes/header.php';
?>

<main>
    <section>
        <br>
        <h1 style="text-align: center;">
            Cross Site Scripting (XSS)<br>
            Description
        </h1>
        <br>
        <p style="text-align: center; font-size: 18px;" class="description">
            Execution of malicious scripts into otherwise benign and trusted websites. Flaws that<br>
            allow these attacks to succeed are quite widespread and occur anywhere in web application <br>
            uses input from a user within the ouput it generates without validating or encoding it. <br>
        </p>
    </section>
    <div id="style-button">
        <p class="links"><a href="xss.php" class="button">Let's try</a></p>
    </div><br><br>
</main>

<?php
require '../includes/footer.php';
?>