<?php
session_start();
include("../model/db.php");


if (!isset($_SESSION["username"])) {
    echo "Access denied. Please <a href='user_log.php'>login</a>.";
    exit;
}


$user_name = $_SESSION["username"];


if (!isset($_COOKIE["visited"])) {
    $welcomeMsg = "Welcome to Gym Management System!";
    setcookie("visited", "yes", time() + 3600, "/");
    setcookie("welcomeName", $user_name, time() + 3600, "/");
} else {
    $welcomeMsg = "Welcome back, " . $_COOKIE["welcomeName"] . "!";
}
?>
