<?php
require_once '../header.php';
require_once 'functions.inc.php';
require_once 'dbh.inc.php';
$mode;
$uid = $_SESSION["usersid"];
if (isset($_GET['option'])) {
    if ($_GET['option'] === 'default') {
        $mode = "default";
        changeMode($conn, $mode, $uid);
        header("Location: ../profile.php?mode=changed");
        exit();
    } else if ($_GET['option'] === 'dark') {
        $mode = "dark";
        changeMode($conn, $mode, $uid);
        header("Location: ../profile.php?mode=changed");
        exit();
    } else if ($_GET['option'] === 'happy') {
        $mode = "happy";
        changeMode($conn, $mode, $uid);
        header("Location: ../profile.php?mode=changed");
        exit();
    } else if ($_GET['option'] === 'hack') {
        $mode = "hack";
        changeMode($conn, $mode, $uid);
        header("Location: ../profile.php?mode=changed");
        exit();
    } else {
        header("Location: ../index.php?wrong=notset");
        exit();
    }
} else {
    header("Location: ../index.php?wrong=notset");
    exit();
}