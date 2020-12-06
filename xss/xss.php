<?php
require '../includes/header.php';
?>

<main>
    <br>
    <h2 style="text-align: center;">
        Cross Site Scripting (XSS)
    </h2><br><br>

    <div style="display: flex;">
        <div style="flex:1; border: 5px solid #e58703; padding: 10px;">
            <form action="" method="POST">
                <h3 style="text-align: center;">
                    Comment section
                </h3><br>
                <label for="input-id">Your Name</label><br>
                <input type="text" name="input-id" id="input-id" required><br><br>

                <label for="input-comment">Your comment</label><br>
                <textarea name="input-comment" id="input-comment" cols="60" rows="10"></textarea>
                <br><br>

                <button type="button" name="submit" id="submit" class="button">Comment</button>
                <button type="reset" id="reset" class="button">Reset</button><br><br>
            </form>
            <div style="color: black; text-align: left;font-size: 16px;">
                <?php
                $conn = mysqli_connect('localhost', 'root', 'CFNJkodrjun', 'security_testing');
                if ($conn) {
                    echo "<hr>";
                    echo "<hr>";
                    $sql = "select * from commentSection";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_row($result)) {
                        echo "Name     : " . $row[0];
                        echo "<br>Comment : " . $row[1];
                        echo "<hr>";
                        echo "<hr>";
                    }
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
        <div style="flex:1; border: 5px solid #e58703; padding: 10px;">
            <form action="" method="POST">
                <textarea name="solution" id="solution" readonly cols="80" rows="20" class="button" style="background-color: #e0b170;">
                    !! Warning 
                    !! Unsafe practice
                    !! Learning purpose only
                    !! You can write any javascript in comment section

                    !! try input this into comment--> 
                    &lt;script&gt; 
                        alert('This script can be executed without ur knowledge');
                    &lt;/script&gt;

                    !! try input this into comment--> 
                    &lt;script&gt; 
                        window.location = 'http://www.google.com'
                    &lt;/script&gt;
                </textarea>
            </form>
        </div>
    </div><br><br>
    <script src="script.js"></script>
</main>

<?php
require '../includes/footer.php';
?>