<?php include '../control/user_data_control.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Data</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php if (!empty($error)) { ?>
  <p class="error-msg"><?php echo $error; ?></p>
<?php } elseif ($user) { ?>
    <h2 class="welcome">Your Profile, <span class="username-highlight"><?php echo $user['user_name']; ?></span></h2>


  <div class="user-data-box">

    <div>
      <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
      <p><strong>Birthday:</strong> <?php echo $user['birthday']; ?></p>
      <p><strong>Gender:</strong> <?php echo ucfirst($user['gender']); ?></p>
      <p><strong>Phone:</strong> <?php echo $user['phone']; ?></p>
      <p><strong>Address:</strong> <?php echo ucfirst($user['address']); ?></p>
      <p><strong>Membership:</strong> <?php echo ucfirst($user['membership']); ?></p>
      <p><strong>Trainer:</strong> <?php echo ucfirst($user['trainer']); ?></p>
      <p><strong>Workout Days:</strong> <?php echo ($user['workout_days']); ?></p>
    </div>


    <div>
      <?php if (!empty($user['photo'])) { ?>
        <img src="../uploads/<?php echo $user['photo']; ?>" alt="Profile Picture">
      <?php } else { ?>
        <p>No profile picture uploaded</p>
      <?php } ?>
    </div>

  </div>

<?php } ?>

</body>
</html>
