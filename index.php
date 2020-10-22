<?php
include_once 'header.php';
?>
    <center>
        <br><br>
        <img id="index-image" src="css/loginsystem.png" alt="loginsystemimage"><br><br>
        <?php
            if (isset($_SESSION['usersuid'])) {
                require_once 'includes/dbh.inc.php';
                $sql = 'SELECT * FROM users WHERE usersUid="'.$_SESSION["usersuid"].'";';
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                $theirname;
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<h2>Hello '.$row['usersName'].'!</h2>';
                    }
                }
            } else {
                echo '<h2>LOGIN BRO</h2>';
            }
        ?>
        <br><br><br><br>
        <p>This is just a website to see how login stuff works and other stuff.
    </center>
<?php
include_once 'footer.php';
?>