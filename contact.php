<!DOCTYPE html>
<?php include 'connect.php' ?>
<html>
<head>
<title>Contact us</title>
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

<div style="background-color:Gray;">
<h1 style="font-family:verdana;">
<center>Details</center>
</h1>
</div>
<h2>
<p>For any further queries please feel free to contact us</p>
</h2>
<div style="float:left">
<img src="sai .jpg" hspace="50" style="width:304px;height:200px;">
<img src="FB_IMG_1503816017319.jpg" hspace="50" style="width:304px;height:200px;">
<img src="ef.jpg" hspace="50" style="width:304px;height:200px;">
<img src="bali.jpg" hspace="50" style="width:304px;height:200px;">
<img src="34.jpg" hspace="50" style="width:304px;height:200px;">
</div>
<div>
<h3>
<p style="font-family:verdana;">
<h1>Team:</h1>
<ol>
  <li>A.Ephraim</li>
  <li>B.Saikumar</li>
  <li>Ch.Anurag</li>
  <li>B.Sandeep</li>
  <li>Ch.Prasannakumar</li>
</ol> 
<h1>cont-info:</h1>
<ol>
  <li>aephraim.cse.anits.edu.in, 7899876542</li>
  <li>bsaikumar.15.cse.anits.edu.in, 9876674403</li>
  <li>canurag.15.cse@anits.edu.in, 7675767566</li>
  <li>bsandeep.15.cse@anits.edu.in, 9876540986</li>
  <li>cprasannakumar.15.cse@anits.edu.in, 8998789806</li>
</ol> 

  
</p>
</h3>
</div>

</body>
</html>

