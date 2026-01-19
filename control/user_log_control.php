<?php
session_start();
include("../model/db.php");

$error = "";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = createConnObj();
    $result = getUserByEmail($conn, $email); 

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        
        if ($row["password"] == $password) {
            $_SESSION["username"] = $row["user_name"];
            setcookie("welcomeName", $row["user_name"], time() + 3600, "/");
            closeConn($conn);
            header("Location: user_home.php");
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "Invalid email or password.";
    }

    closeConn($conn); 
}

?>
