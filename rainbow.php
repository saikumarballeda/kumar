<!DOCTYPE html>
<html>
<head>
<title>career search engine</title>
<link rel="stylesheet" type="text/css" href="style5.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      #img-changer{
      width: 1500px;
      height : 600px;
      margin : 30px auto;
      border-radius: 3px;
      margin-top: 1px;
      background: url(3802002.jpg) no-repeat;
      background-size: cover;
      -webkit-transition: background 0.7s;
      -moz-transition: background 0.7s;
      transition: background 0.7s;
      
      }
  </style>
</head>
<body style="background-color: #dfd ">
    <div style="padding-left:5%;padding-right:5%;">
    <img src="3802000.jpg">
    <img src="3802001.jpg" style="float:right;width: 950px;height:250px">
<center>      
<div class="nav">
<ul>
<li><a href="#"> HOME</a></li>
<li><a href="#"> ABOUT</a>
<ul>
    <li><a href="faculty.html"> FACULTY</a></li>
    <li><a href="facilities.html">FACILITY</a></li>
</ul>
</li>
<li><a href="admission.php"> ADMISSIONS</a></li>
<li><a href="payment.php"> PAYMENT</a></li>
<li><a href="mission.php"> VISION&MISSION</a></li>
<li><a href="cont.php">CONTACT</a>
</ul>
    </div>
</center>
<center>
    <p style="background-color:rgba(0,0,0,0.7);color:#F8F9F9;padding:30px 20px;margin-top:10px;font-size:30px"><i>THE BEST WAY <br>TO PREDICT THE FUTURE <br> IS TO CREATE IT</i></p>
</center>
    </div>
    <div id="img-changer"></div>
    <script>
        var img_show = document.getElementById("img-changer");
        var array = ["3802002.jpg","3802003.jpg","3802004.jpg"];
        var counter = 0;
        function changecol(){
        if(counter >= array.length)
        {
            counter = 0;
        }
        img_show.style.backgroundImage = "url("+array[counter]+")";
        counter++;
        }
        
        setInterval(changecol,1000);
    </script>
</body>
</html>
