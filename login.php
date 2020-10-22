<?php
include_once 'header.php';
?>
    <center>
        <div class="form">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post"><br>
                <input type="text" name="name" placeholder="Username/Email..."><br>
                <input type="password" name="pwd" placeholder="Password..."><br>
                <input type="submit" name="submit" value="Login">
            </form>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyinput") {
                        echo '<p id="error">Empty Fields</p>';
                    } else if ($_GET['error'] == "wronglogin") {
                        echo '<p id="error">Incorrect login info.</p>';
                    }
                }
            ?>
        </div>
    </center>
<?php
include_once 'footer.php';
?>