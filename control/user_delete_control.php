<?php
session_start();
include("../model/db.php");

if (!isset($_SESSION["username"])) {
    echo "Access denied. Please <a href='user_log.php'>login</a>.";
    exit;
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete"])) {
    $user_name = $_SESSION["username"];
    $conn = createConnObj();


    if (deleteUserByUsername($conn, $user_name)) {
        session_unset();
        session_destroy();
        setcookie("welcomeName", "", time() - 3600, "/");
        header("Location: ../view/user_log.php");
        exit;
    } else {
        echo "❌ Failed to delete account: " . mysqli_error($conn);
    }

    closeConn($conn);
}
?>
