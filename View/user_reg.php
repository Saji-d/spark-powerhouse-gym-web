<!DOCTYPE html>
<?php include '../control/user_reg_control.php'; ?>
<html>
<head>
    <title>Gym Registration</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1>Gym Membership Registration Form</h1>

<form action="" method="post" enctype="multipart/form-data">

<fieldset>
  <legend>Account Information</legend>
  <table>
    <tr>
      <td><label for="user_name">Username:</label></td>
      <td>
        <input type="text" id="user_name" name="user_name">
        <span class="error-msg"><?php echo $userNameError; ?></span>
      </td>
    </tr>
    <tr>
      <td><label for="email">Email Address:</label></td>
      <td>
        <input type="email" id="email" name="email">
        <span class="error-msg"><?php echo $emailError; ?></span>
      </td>
    </tr>
    <tr>
      <td><label for="password">Password:</label></td>
      <td>
        <input type="password" id="password" name="password">
        <span class="error-msg"><?php echo $passwordError; ?></span>
      </td>
    </tr>
    <tr>
      <td><label for="photo">Profile Picture:</label></td>
      <td><input type="file" id="photo" name="photo" accept="image/*"></td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Personal Information</legend>
  <table>
    <tr>
      <td><label for="address">Current Address:</label></td>
      <td><input type="text" id="address" name="address"></td>
    </tr>
    <tr>
      <td><label for="Date_of_Birth">Date of Birth:</label></td>
      <td><input type="date" id="Date_of_Birth" name="Date_of_Birth"></td>
    </tr>
    <tr>
      <td><label for="gender">Gender:</label></td>
      <td>
        <span><input type="radio" id="male" name="gender" value="male"><label for="male">Male</label></span>
        <span><input type="radio" id="female" name="gender" value="female"><label for="female">Female</label></span>
        <span><input type="radio" id="other" name="gender" value="other"><label for="other">Other</label></span>
      </td>
    </tr>
    <tr>
      <td><label for="phone">Phone Number:</label></td>
      <td>
        <input type="tel" id="phone" name="phone">
        <span class="error-msg"><?php echo $phoneError; ?></span>
      </td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Membership Details</legend>
  <table>
    <tr>
      <td><label for="membership">Select Membership Type:</label></td>
      <td>
        <select id="membership" name="membership">
          <option value="">Select</option>
          <option value="basic">Basic</option>
          <option value="standard">Standard</option>
          <option value="premium">Premium</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label for="trainer">Personal Trainer Required?</label></td>
      <td>
        <input type="radio" id="yes" name="trainer" value="yes"><label for="yes">Yes</label>
        <input type="radio" id="no" name="trainer" value="no"><label for="no">No</label>
      </td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Workout Preferences</legend>
  <label>Select Preferred Workout Days:</label>
  <table>
    <tr><td><input type="checkbox" name="saturday" value="Saturday"> Saturday</td></tr>
    <tr><td><input type="checkbox" name="sunday" value="Sunday"> Sunday</td></tr>
    <tr><td><input type="checkbox" name="monday" value="Monday"> Monday</td></tr>
    <tr><td><input type="checkbox" name="tuesday" value="Tuesday"> Tuesday</td></tr>
    <tr><td><input type="checkbox" name="wednesday" value="Wednesday"> Wednesday</td></tr>
    <tr><td><input type="checkbox" name="thursday" value="Thursday"> Thursday</td></tr>
    <tr><td><input type="checkbox" name="friday" value="Friday"> Friday</td></tr>
  </table>
</fieldset>

<input type="submit" name="Submit" value="Submit">

</form>
</body>
</html>
