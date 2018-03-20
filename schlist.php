<!DOCTYPE html>
<?php include 'connect.php' ?>
<html>
<head>
<title>schools</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
	<div class="logo" style="width:100%;height:300px;">
	</div>

	<div class="navigation">
		<div class="items">
			<div class="home"><a href="index.php">HOME</a></div>
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
<br/>
<pre>
<ul>
	<li>RAINBOW INTERNATIONAL SCHOOL: <a href="rainbow.php" style="text-decoration: underline;">click for more</a>    <sub>rating:10</sub></li>
	<li>seshi :<a href="#" style="text-decoration: underline;">click for more</a>     <sub>rating:9.8</sub></li>
    <li>modern high school: <a href="#" style="text-decoration: underline;">click for more</a>     <sub>rating:8.8</sub></li>
</ul>
</pre>
</body>
</html