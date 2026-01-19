<?php
include '../control/user_home_control.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gym User Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2 class="welcome"><?php echo $welcomeMsg; ?></h2>

<ul class="home-links">
    <li><a href="user_data.php">View Profile</a></li>
    <li><a href="user_update.php">Update Details</a></li>
    <li><a href="user_delete.php">Remove Account</a></li>
    <br> <br> <br> 
    <li><a href="user_logout.php" class="logout-green">Logout</a></li>
</ul>


</body>
</html>
