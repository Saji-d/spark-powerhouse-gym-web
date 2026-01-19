<?php
session_start();
include("../model/db.php");


if (!isset($_SESSION["username"])) {
    echo "<p class='error-msg'>Access denied. Please <a href='user_log.php'>login</a>.</p>";
    exit;
}

$user_name = $_SESSION["username"];
$conn = createConnObj();

$result = getUserByUsername($conn, $user_name);

if ($result && mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result); 
} else {
    $error = "User not found!";
    $user = null;
}

closeConn($conn);
?>
