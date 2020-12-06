<?php
require '../includes/header.php';
?>

<main>
    <section>
        <br>
        <h1 style="text-align: center;">
            Cross Site Request Forgery <br>
            Description
        </h1>
        <br>
        <p style="text-align: center; font-size: 18px;" class="description">
            Cross-Site Request Forgery (CSRF) is an attack that forces an end user to <br>
            execute unwanted actions on a web application in which they’re currently authenticated. <br>
            With a little help of social engineering (such as sending a link via email or chat), <br>
            an attacker may trick the users of a web application into executing actions of the attacker’s choosing.
        </p>
    </section>
    <div id="style-button">
        <p class="links"><a href="csrf.php" class="button">Let's try</a></p>
    </div><br><br>
</main>

<?php
require '../includes/footer.php';
?>