<?php
include_once 'header.php';
?>
    <center>
        <div class="form">
            <h2>Signup</h2>
            <form action="includes/signup.inc.php" method="post"><br>
                <input type="text" name="name" placeholder="Full name..."><br>
                <input type="text" name="email" placeholder="Email..."><br>
                <input type="text" name="uid" placeholder="Username..."><br>
                <input type="password" name="pwd" placeholder="Password..."><br>
                <input type="password" name="pwdrepeat" placeholder="Repeat Password..."><br>
                <input type="submit" name="submit" value="Signup">
            </form>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyinput") {
                        echo '<p id="error">Empty Fields</p>';
                    } else if ($_GET['error'] == "invaliduid") {
                        echo '<p id="error">Choose a proper username</p>';
                    } else if ($_GET['error'] == "invalidemail") {
                        echo '<p id="error">Choose a proper email</p>';
                    } else if ($_GET['error'] == "passworddontmatch") {
                        echo '<p id="error">Passwords dont match!</p>';
                    }  else if ($_GET['error'] == "stmtfailed") {
                        echo '<p id="error">Something went wrong. Try again.</p>';
                    } else if ($_GET['error'] == "usernametaken") {
                        echo '<p id="error">Username already taken</p>';
                    } else if ($_GET['error'] == "none") {
                        echo '<p id="gerror">Success! You have signed up!</p>';
                    }
                }
            ?>
        </div>
    </center>
<?php
include_once 'footer.php';
?>