<?php include 'connect.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>vision</title>
<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body style="background-color:#dfd">
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

<center>
<div id="dis" style="padding-top:50px">
<input list="districts" id="district">
<datalist id="districts">
  <option value="visakhapatnam">
  <option value="srikakulam">
  <option value="vizinagaram">
</datalist>
<button onclick="myFunction()">submit</button><br/>
<span id="myForm">
</span>
<button onclick="window.location.assign('schlist.php')">submit</button><br/>
</div>
</center>
<script>
function myFunction() {

	var Elem = document.getElementById("district");
	//alert(Elem.value);
	
	if(Elem.value==="visakhapatnam"){
	
    var x = document.createElement("INPUT");
    x.setAttribute("list", "browsers");
    document.getElementById("myForm").appendChild(x);
	

    var y = document.createElement("DATALIST");
    y.setAttribute("id", "browsers");
    document.getElementById("myForm").appendChild(y);

    var z = document.createElement("OPTION");
    z.setAttribute("value", "bheemilipatnam");
    document.getElementById("browsers").appendChild(z);
	
    var s = document.createElement("OPTION");
    s.setAttribute("value", "anakapalle");
    document.getElementById("browsers").appendChild(s);
    var t = document.createElement("OPTION");
    t.setAttribute("value", "Gajuwaka");
    document.getElementById("browsers").appendChild(t);
	}
	if(Elem.value==="vizinagaram"){
	
    var x = document.createElement("INPUT");
    x.setAttribute("list", "browsers");
    document.getElementById("myForm").appendChild(x);
	

    var y = document.createElement("DATALIST");
    y.setAttribute("id", "browsers");
    document.getElementById("myForm").appendChild(y);

    var z = document.createElement("OPTION");
    z.setAttribute("value", "kothavalasa");
    document.getElementById("browsers").appendChild(z);
	
    var s = document.createElement("OPTION");
    s.setAttribute("value", "aaruku");
    document.getElementById("browsers").appendChild(s);
    var t = document.createElement("OPTION");
    t.setAttribute("value", "Gaka");
    document.getElementById("browsers").appendChild(t);
	}
	if(Elem.value==="srikakulam"){
	
    var x = document.createElement("INPUT");
    x.setAttribute("list", "browsers");
    document.getElementById("myForm").appendChild(x);
	

    var y = document.createElement("DATALIST");
    y.setAttribute("id", "browsers");
    document.getElementById("myForm").appendChild(y);

    var z = document.createElement("OPTION");
    z.setAttribute("value", "bheemtnam");
    document.getElementById("browsers").appendChild(z);
	
    var s = document.createElement("OPTION");
    s.setAttribute("value", "analle");
    document.getElementById("browsers").appendChild(s);
    var t = document.createElement("OPTION");
    t.setAttribute("value", "Gwaka");
    document.getElementById("browsers").appendChild(t);
	}
}
</script>
</body>
</html>