
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: signin.php");
  }
?> 


<!DOCTYPE html>
<html>
<head>
  <title> WhAM</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
  <form id="msform" action="complain.php" method="post">
    <fieldset>
      <h2 class="fs-title">Complain</h2>
      <textarea name="complain" placeholder="Your Complain" id="text" rows="20"></textarea>
      <button name="submit" class="submit action-button">Submit</button>
    </fieldset>
  </form>

</body>
</html>

<?php 
      
      $complain = "";

       function validate($data)
      {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      if (isset($_POST['submit'])) {  
          $complain        = validate($_POST["complain"]);   

      $link = mysqli_connect("localhost", "root", "", "cse311project");
      if($link == false)
          die("ERROR: " .mysqli_connect_error());


      if (!empty($complain)) {
        $username= $_SESSION['username'];

          $mysqli = "INSERT INTO complain(STATEMENT, USERNAME) VALUES('$complain','$username' )";

          if (!mysqli_query($link,$mysqli)) {
               echo "ERROR: ".mysqli_error($link);
          }
          else{

            header("Location: home2.php");
            
          }
      }

      mysqli_close($link);
    }
   ?>
