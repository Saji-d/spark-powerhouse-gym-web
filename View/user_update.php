<?php
include '../control/user_update_control.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Data Update</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>
<body>

<h2 class='welcome'>Update your info, <span class='username-highlight'><?php echo $row['user_name']; ?></span></h2>

<?php if (!empty($updateMsg)) { ?>
    <p class="success-msg"><?php echo $updateMsg; ?></p>
<?php } ?>


<form method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>"></td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" id="address" name="address" value="<?php echo $row['address']; ?>"></td>
        </tr>
        <tr>
            <td><label for="membership">Membership:</label></td>
            <td>
                <select id="membership" name="membership">
                    <option value="Basic" <?php echo $row['membership'] == 'Basic' ? 'selected' : ''; ?>>Basic</option>
                    <option value="Standard" <?php echo $row['membership'] == 'Standard' ? 'selected' : ''; ?>>Standard</option>
                    <option value="Premium" <?php echo $row['membership'] == 'Premium' ? 'selected' : ''; ?>>Premium</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="photo">Change Profile Picture:</label></td>
            <td><input type="file" name="photo" id="photo" accept="image/*"></td> 
        </tr>
    </table>

    <input type="submit" name="update" value="Update">
</form>

</body>
</html>
