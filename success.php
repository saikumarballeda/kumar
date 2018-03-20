<?php include 'connect.php';  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>success</title>
        <link rel="stylesheet" type="text/css" href="style4.css">
        <style>

        body{
        	font-family: sans-serif;
        	background: grey;
        }
        .jumbotron{
					margin: 180px 100px 0px 100px;
					background: white;
					border-radius: 30px;
				}
		.pad {
			padding:50px 50px 50px 50px;
		}
        </style>
    </head>
    <body>
       
        <?php 
        
        if(!isset($_SESSION['username'])) {
            header('location: index.php?please login');
        }
 else {
     $val =$_SESSION['class'];

     if($val== -1)
     	$val = "lkg";
     elseif ($val == 0) 
     	$val="ukg";
     elseif ($val == 1) 
     	$val="first";
     elseif ($val == 2) 
     	$val="second";
     elseif ($val == 3) 
     	$val="third";
     elseif ($val == 4) 
     	$val="fourth";
     elseif ($val == 5) 
     	$val="fifth";
     elseif ($val == 6) 
     	$val="sixth";
     elseif ($val == 7) 
     	$val="seventh";
     elseif ($val == 8) 
     	$val="eight";
     elseif ($val == 9) 
     	$val="nine";
     elseif ($val == 10) 
     	$val="tenth";
     
     
     $query = "update status_table set $val=  $val +1";
     $query_result = mysqli_query($db, $query) or die(mysqli_error($db));
     
      }
        
       ?>
        <div class="container add_margin">
                <div class="jumbotron">
                    <h3 class="pad" align="center">Your Admission Is Confirmed.Thank You For Contacting Us</h3><hr>
                    <p class="pad" align="center"><b>Click <a href="index.php" style="color:blue">Here</a> To Move Main Page</b></p>
                </div>
        </div>
    </body>
</html>