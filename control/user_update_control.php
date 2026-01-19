<?php
session_start();
include("../model/db.php");

if (!isset($_SESSION["username"])) {
    echo "<p class='error-msg'>Access denied. Please <a href='user_log.php'>login</a>.</p>";
    exit;
}

$user_name = $_SESSION["username"];
$updateMsg = "";

$conn = createConnObj();

$result = getUserByUsername($conn, $user_name);
$row = mysqli_fetch_assoc($result);

if (isset($_POST["update"])) {
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $membership = $_POST["membership"];
    $newPhoto = "";

    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $target_dir = "../uploads/";
        $newPhoto = time() . "_" . basename($_FILES["photo"]["name"]);
        $target_file = $target_dir . $newPhoto;

        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $row["photo"] = $newPhoto;
        } else {
            $updateMsg = "Photo upload failed.";
        }
    }

    $finalPhoto = "";
    if ($newPhoto != "") {
        $finalPhoto = $newPhoto;
    } else {
        $finalPhoto = null;
    }

    if (updateUserProfile($conn, $user_name, $phone, $address, $membership, $finalPhoto)) {
        $updateMsg = "Updated successfully!";
        $result = getUserByUsername($conn, $user_name);
        $row = mysqli_fetch_assoc($result);
    } else {
        $updateMsg = "Update failed.";
    }
}

closeConn($conn);
?>
