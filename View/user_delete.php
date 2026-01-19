<?php
include '../control/user_delete_control.php'; 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Confirm Deletion</title>
</head>
<body>

<h2>Are you sure you want to delete your account?</h2>

<form method="POST">
    <input type="submit" name="delete" value="Yes, Delete My Account">
</form>

<br><br><br>
<a href="user_home.php">Cancel</a>

</body>
</html>
