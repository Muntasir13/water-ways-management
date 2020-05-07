<!DOCTYPE html>
<html>
<head>
  <title> WhAM</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
  <form id="msform" action="signup2.php" method="post">
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Personal Details</li>
    </ul>
    <fieldset>
      <h2 class="fs-title">Personal Details</h2>
      <h4 class="fs-subtitle">Just a few more steps</h4>
      <input type="text" name="fname" placeholder="First Name" />
      <input type="text" name="lname" placeholder="Last Name" />
      <input type="text" name="phone" placeholder="Phone" />
      <textarea name="pre_address" placeholder="Present Address"></textarea>
      <textarea name="per_address" placeholder="Permanent Address"></textarea>
      <input type="numeric" name="nid" placeholder="NId No." />
      <button type="submit" name="submit" class="submit action-button">Submit</button>
    </fieldset>
  </form>

   <?php 
        print_r($_GET);
    ?>
   <!-- <?php 
      
      $fname       = "";
      $lname       = "";
      $phone       = "";
      $pre_address = "";
      $per_address = "";
      $nid         = "";
    

       function validate($data)
      {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      if (isset($_POST['submit'])) {  
          $fname        = validate($_POST["fname"]);
          $lname        = validate($_POST["lname"]);
          $phone        = validate($_POST["phone"]);
          $pre_address  = validate($_POST["pre_address"]);
          $per_address  = validate($_POST["per_address"]);
          $nid          = validate($_POST["nid"]);    

      $link = mysqli_connect("localhost", "root", "", "cse311project");
      if($link == false)
          die("ERROR: " .mysqli_connect_error());

        $name = $fname . " " . $lname;

      if (!empty($fname) || !empty($lname) || !empty($phone) || !empty($pre_address) || !empty($per_address) || !empty($nid)) {
          $mysqli = "INSERT INTO personal_info(NAME, PHONE, PRE_ADDRESS, PER_ADDRESS, NId) VALUES('$name', '$phone', '$pre_address', '$per_address', '$nid')";

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
 -->

</body>
</html>