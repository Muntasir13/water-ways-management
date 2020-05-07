<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title> WhAM</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
  <form id="msform" action="signup.php" method="post">
  <?php include('errors.php'); ?>
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Personal Details</li>
    </ul>
    <fieldset>
      <h2 class="fs-title">Create your account</h2>
      <input type="text" name="username" placeholder="Username" required="1"   value="<?php echo $username; ?>">
      <input type="text" name="email" placeholder="Email" required="1" value="<?php echo $email; ?>" /> 
      <input type="password" name="password_1" placeholder="Password" required="1"  />
      <input type="password" name="password_2" placeholder="Confirm Password" required="1" />
      <BUTTON type="submit" class="submit action-button" name="reg_user" />Next</BUTTON>
    </fieldset>
  </form>



</body>
</html>