<!DOCTYPE html>
<?php  include 'connect.php' ?>
<html>
<head>
<title>Vision/mission</title>
<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
	<div class="logo" style="width:100%;height:300px;">
	</div>

	<div class="navigation">
		<div class="items">
			<div class="home"><a href="index.php">HOME</a></div>
			<div class="home"><a href="admin.php">ADMISSIONS</a></div>
			<div class="home"><?php

            if(isset($_SESSION['username'])){

                ?><a href="logout.php">LOG-OUT</a><?php
            }
            else
            {
                ?><a href="login.php">LOGIN</a><?php
            }

            ?></div>
			<div class="home"><a href="vision.php">VISION AND MISSION</a></div>
			<div class="home"><a href="contact.php">CONTACT US</a></div>
			<div class="home"><a href="aboutus.php">ABOUT US</a></div>
		</div>
	</div>
<div style="background-color:powderblue;">
<h1 style="font-family:verdana;text-align:center">Vision</h1>
</div>
<div>
<img src="pic.jpg" hspace="50" style="width:304px;height:200px;float:left">
</div>
<p style="font-family:verdana;">
 The proposed software is called School Admission System(SAS). The main objective of this software is to provide schools that fulfill the needs of parents. All the school information which are present in particular area is stored in the website. Here the parents access the system by using pincode. The system keeps track of the details of the students, and the amenities that are provided to them such as laboratories, playground, transport facility, co-curricular activities and hostel facilities etc.Such valuable information can be stored in paper records but this often leads to confusion which is error prone. This system helps to reduce the use of paper and makes the admission process easier.This system bring parents and schools to one platform making the search for good school easier.For any further information parents can interact with school management with ease
<br/><br/><br/>
<br/>
<br/>
<div style="background-color:orange;">
<h1 style="background-color:orange;">
<h1 style=="font-family:verdana;">
<center>Mission</center>
</h1>
</div>
<p style="font-family:verdana;">
The main purpose of the system is to reduce confusion of most of the parents regarding where to admit their children.  In this system every new user must register to access web application to meet their needs. Already register user can directly login to access the web application. After registration process user has to provide the place in which the user wish to search for required schools. Then all the schools located in that particular area will be displayed on the screen. Depending on the user choice the selection will be made and by clicking on the link provided for particular school ,the official web page of school will be displayed. Now user can get all the required information about amenities such as playground, faculty profile, transport facility etc. The fee structure and method of payment like online payment facility will also be displayed.




</p>
</h3>
</div>

</body>
</html>

