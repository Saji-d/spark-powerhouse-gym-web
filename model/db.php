<?php

// ✅ Create DB connection
function createConnObj() {
    return mysqli_connect("localhost", "root", "", "gym_db");
}

// ✅ Insert new user (including birthday and photo)
function insertUser($conn, $user_name, $email, $password, $birthday, $gender, $address, $phone, $membership, $trainer, $workout_days, $photo) {
    $sql = "INSERT INTO users (user_name, email, password, birthday, gender, address, phone, membership, trainer, workout_days, photo)
            VALUES ('$user_name', '$email', '$password', '$birthday', '$gender', '$address', '$phone', '$membership', '$trainer', '$workout_days', '$photo')";
    return mysqli_query($conn, $sql);
}

// ✅ Get user by email (used during login)
function getUserByEmail($conn, $email) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    return mysqli_query($conn, $sql);
}

// ✅ Get user by username (used in dashboard and profile)
function getUserByUsername($conn, $user_name) {
    $sql = "SELECT * FROM users WHERE user_name='$user_name'";
    return mysqli_query($conn, $sql);
}

// ✅ Update user profile (photo is optional)
function updateUserProfile($conn, $user_name, $phone, $address, $membership, $photo = null) {
    if ($photo) {
        $sql = "UPDATE users 
                SET phone='$phone', address='$address', membership='$membership', photo='$photo' 
                WHERE user_name='$user_name'";
    } else {
        $sql = "UPDATE users 
                SET phone='$phone', address='$address', membership='$membership' 
                WHERE user_name='$user_name'";
    }
    return mysqli_query($conn, $sql);
}

// ✅ Delete user by username
function deleteUserByUsername($conn, $user_name) {
    $sql = "DELETE FROM users WHERE user_name='$user_name'";
    return mysqli_query($conn, $sql);
}

// ✅ Close DB connection
function closeConn($conn) {
    mysqli_close($conn);
}
?>
