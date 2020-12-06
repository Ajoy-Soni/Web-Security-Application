<?php
require '../includes/header.php';
?>

<main>
    <section>
        <br>
        <h1 style="text-align: center;">
            SQL Injection <br>
            Description
        </h1>
        <br>
        <p style="text-align: center; font-size: 18px;" class="description">
            SQL injection consists of insertion of a SQL query via the input data from the client.<br>
            SQL injection can read sensitive data from database, modify database state, execute operations etc. <br>
            In general consider SQL injection a high impact severity. <br>
        </p>
    </section>
    <div id="style-button">
        <p class="links"><a href="injection.php" class="button">Let's try</a></p>
    </div><br><br>
</main>

<?php
require '../includes/footer.php';
?>