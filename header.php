<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="css/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <?php
        require_once 'includes/functions.inc.php';
        require_once 'includes/dbh.inc.php';
        if (isset($_SESSION['usersuid'])) {
            $mode = getMode($conn, $_SESSION['usersuid']);
            if ($mode === "default") {
                echo '<link rel="stylesheet" href="css/default.css">';
            } else if ($mode === "dark") {
                echo '<link rel="stylesheet" href="css/dark.css">';
            } else if ($mode === "happy") {
                echo '<link rel="stylesheet" href="css/happy.css">';
            } else if ($mode === "hack") {
                echo '<link rel="stylesheet" href="css/hack.css">';
            }
        } else {
            echo '<link rel="stylesheet" href="css/style.css">';
        }
    ?>
</head>
<body>
    <div class="grid">
        <div class="header">
            <div class="lheader">
                <h2><a href="#">LoginBro</a></h2>
            </div>
            <div class="rheader">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <?php
                        if (isset($_SESSION['usersuid'])) {
                            echo '<li><a href="profile.php">Profile</a></li>';
                            echo '<li><a href="includes/logout.inc.php">Logout</a></li>';
                        } 
                        else {
                            echo '<li><a href="login.php">Login</a></li>';
                            echo '<li><a href="signup.php">Signup</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="main">