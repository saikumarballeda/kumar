<!DOCTYPE html>
<?php
include 'connect.php';?>
<html>
<head>
	<title>SCHOOL ADMISSIONS</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
	<div class="logo" style="width:100%;height:300px;">
	</div>

	<div class="navigation">
		<div class="items">
			<div class="home"><a href="#">HOME</a></div>
			<div class="home"><a href="admin.php">ADMISSIONS</a></div>
			<div class="home"><a href="vision.php">VISION AND MISSION</a></div>
			<div class="home"><?php

			if(isset($_SESSION['username'])){

				?><a href="logout.php">LOG-OUT</a><?php
			}
			else
			{
				?><a href="login.php">LOGIN</a><?php
			}

			?></div>
			<div class="home"><a href="contact.php">CONTACT US</a></div>
			<div class="home"><a href="aboutus.php">ABOUT US</a></div>
		</div>
	</div>

	<div id="image-changer"></div>
	<script type="text/javascript" src="col_change.js"></script>
	<div id="footer">
		<p>copyright &copy; School Admissions.All Rights Reserved | Contact Us: +91 7093375763</p>
	</div>
</body>
</html>