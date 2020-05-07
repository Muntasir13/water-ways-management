<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title> WhAM</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
  <form id="msform" action="signin.php" method="post">
  <?php include('errors.php'); ?>
   
    <fieldset>
      <h2 class="fs-title">LOGIN</h2>
      <input type="text" name="username" placeholder="Username" required="1">
      <input type="password" name="password" placeholder="Password" required="1" />
      <BUTTON type="submit" name="login_user" class="submit action-button" />SIGN IN</BUTTON>
    </fieldset>
	<p>
  		Not yet a member? <a href="signup.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
