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
		<title> WhAM!! </title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		<div id="header">
			<h1 id="logo">WhAM!!</h1>
			<span id="left_block">
				<span id="home_div">
					<a href="home.php">HOME</a>
				</span>
				<span id="about_div">
					<a href="about.php">ABOUT</a>
				</span>
				<span id="services_div">
					<a href="services.php">SERVICES</a>
				</span>
				<span id="wham_div">
					<ul>
						<LI>
							<a href="">MY WhAM</a>
							<ul id="dropdown">
								<li> <a href="complain.php">COMPLAIN</a> </li>
								<li> <a href="bill.php">BILL PAY</a> </li>
							</ul>
						</LI>
					</ul>
				</span>
			</span>
			<span id="right_block">
				<?php  if (isset($_SESSION['username'])) : ?>
    	<a href="" id="username"><?php echo $_SESSION['username']; ?></a>
    	<a href="home.php?logout='1'" id="logout">logout</a>
    <?php endif ?>
			</span>
		</div>
		
		<img src="home.jpg" id="home_image">
		
	</body>
</html>