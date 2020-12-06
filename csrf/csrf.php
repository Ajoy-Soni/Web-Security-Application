<?php
require '../includes/header.php';
?>

<main>
    <br>
    <h2 style="text-align: center;">
        Cross Site Request Forgery (CSRF Attack)
    </h2><br><br>

    <div style="display: flex;">
        <div style="flex:1; border: 5px solid #e58703; padding: 10px;">
            <form action="" method="POST">
                <h3>
                    Login form
                </h3>
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
                    !! This form does not use csrf token
                    !! Hence users can channel all the data to their personal sites.
                    !! To avoid this attack use csrf token given bellow in html forms
                    !! and verify the same in server side before login as validation
                    !! &lt;input type = 'hidden' name='token' value='&lt;?=csrf_token(); ?&gt;'&gt;
                </textarea>
            </form>
        </div>
    </div><br><br>
    <script src="script.js"></script>
</main>

<?php
require '../includes/footer.php';
?>