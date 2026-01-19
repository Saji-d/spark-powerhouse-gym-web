<?php
include '../control/user_log_control.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gym Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1>Gym Member Portal</h1>

<?php if (!empty($error)) echo "<p class='error-msg'>$error</p>"; ?> 

<form action="" method="post">
    <table>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" id="email" name="email"></td>
      </tr>
      <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" id="password" name="password"></td>
      </tr>
    </table>
    <input type="submit" name="login" value="Login">
</form>

</body>
</html>
