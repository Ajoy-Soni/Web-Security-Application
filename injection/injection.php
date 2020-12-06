<?php
require '../includes/header.php';
?>

<main>
    <br>
    <h2 style="text-align: center;">
        SQL Injection
    </h2><br><br>

    <div style="display: flex;">
        <div style="flex:1; border: 5px solid #e58703; padding: 10px;">
            <form action="" method="POST">
                <label for="input-id">Enter Id</label><br>
                <input type="text" name="input-id" id="input-id" required><br><br>

                <label for="input-pswd">Enter password</label><br>
                <input type="password" name="input-pswd" id="input-pswd" required><br><br>

                <button type="button" id="submit" class="button">Submit</button>
                <button type="reset" id="reset" class="button">Reset</button><br><br>
            </form>
        </div>
        <div style="flex:1; border: 5px solid #e58703; padding: 10px;">
            <form action="" method="POST">
                <textarea name="solution" id="solution" readonly cols="80" rows="10" class="button" style="background-color: #e0b170;">
                    !! Warning 
                    !! Unsafe practice
                    !! Learning purpose only
                    !! Tricky SQl code to manipulate Database
                    !! try input this --> ' OR '1'='1
                    !! try input this --> '; DROP TABLE dummyTable; --
                </textarea>
            </form>
        </div>
    </div><br><br>
    <script src="script.js"></script>
</main>

<?php
require '../includes/footer.php';
?>