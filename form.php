
<!DOCTYPE html>
<html>
<title> admissions</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style5.css">
</head>


<body style="background-color: #dfd ">
    <img src="3802000.jpg">
    <img src="3802001.jpg" style="float:right;width: 940px;height:250px">
<center>      
<div class="nav">
<ul>
<li><a href="rainbow.php"> HOME</a></li>
<li><a href="#"> ABOUT</a>
<ul>
    <li><a href="#"> FACULTY</a></li>
    <li><a href="#"> FACILITY</a></li>
</ul>
</li>
<li><a href="admission.php"> ADMISSIONS</a></li>
<li><a href="payment.php"> PAYMENT</a></li>
<li><a href="mission.php"> VISION&MISSION</a></li>
<li><a href="contact.php">CONTACT</a>
</ul>
    </div>
</center>


<div class="header">
<h1>school admissions<h1>
</div>
<div class="admissions-page">
  <div class="form">

    <form class="admissions-form" action="push_details.php" method="post">
      <p class="message"> personal information</p><hr>
     <p class="message">Name</p><input type="text" placeholder="Name" name="name"/>
      
      <p class="message">email</p>                              <input type ="email" placeholder="something@mail.com" name="email"/>
      <p class="message">phone No</p>                            <input type="text" placeholder="phone" name="phone"/>
      <p class="message">class to be joined</p>                          
      <select style="width:50px;height:25px;align:left" name="class">
       <option value="-1">LKG</option> 
       <option value="0">UKG</option> 
       <option value="1">1st</option> 
       <option value="2">2nd</option> 
       <option value="3">3rd</option> 
       <option value="4">4th</option> 
       <option value="5">5th</option> 
       <option value="6">6th</option> 
       <option value="7">7th</option> 
       <option value="8">8th</option> 
       <option value="9">9th</option> 
       <option value="10">10th</option> 
       </select>

      <p class="message">Nationality</p>                       <input type="text" placeholder="Nationality" name="nationality"/>
      <p class="message">Religion</p>                           <input type="text" placeholder="Religion" name="religion"/>
      <p class="message">Date of birth</p>                      <input id="date" placeholder="date of birth" type="date" name="date"/>
      <p class="message">Gender</p><hr>
      <p class="message">Female</p>
     <input type="radio" name="gender" value="female">
     <p class="message">Male</p>
  <input type="radio" name="gender" value="male" checked> 
  <br><br>
        <hr>
        <p class="message"> Guardians information</p><hr>
        <p class="message"> Father/Guardian Name </p>              <input type="text" placeholder="Name" name="gname"/>
        <p class="message"> Occupation </p>                       <input type="text" placeholder="Occupation" name="occupation"/>
        <p class="message"> phone </p>                       <input type="text" placeholder="phone" name="gphone"/>
        <p class="message"> Address </p>                       <input type="text" placeholder="Address" name="address"/>
        <input type="submit">
    </form>
  </div>
</div>



  </body>
  </html>