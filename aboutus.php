<!DOCTYPE html>
<html>
<head>
<title>About us</title>
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
<div style="background-color:powderblue;">
<h1 style="font-family:verdana;">
<center>Overview</center>
</h1>
</div>
<div style="float:left">
<img src="sai .jpg" hspace="50" style="width:304px;height:200px;">
<img src="FB_IMG_1503816017319.jpg" hspace="50" style="width:304px;height:200px;">
<img src="ef.jpg" hspace="50" style="width:304px;height:200px;">
<img src="bali.jpg" hspace="50" style="width:304px;height:200px;">
<img src="34.jpg" hspace="50" style="width:304px;height:200px;">
</div>
<div>
<h1>Team is:</h1> 
<ol style="padding-left:30px">
  <li>A.Ephraim</li>
  <li>B.Sandeep</li>
  <li>Ch.Prasanna</li>
  <li>B.Saikumar</li>
  <li>Ch.Anurag</li>
</ol>
<p style="font-family:verdana;">
 With global admissions management system both students and parents can easily apply for schools admission process. Entire flow of Admission is taken care in this application right from beginning of filling up form to selection for Interview/ shortlisting for Examination to announcement of shortlisted students for Admission to payment of Fees for Admission.The main purpose of the system is to reduce confusion of most of the parents regarding where to admit their children.  In this system every new user must register to access web application to meet their needs. Already register user can directly login to access the web application.
</p>
</div>

</body>
</html>
