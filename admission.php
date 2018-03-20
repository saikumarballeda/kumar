<?php include 'server.php';

	$lkg_query= "SELECT * FROM `status_table` WHERE 1";

	$query_result = mysqli_query($db,$lkg_query);

	$row = mysqli_fetch_array($query_result);


	 ?>
	 <!DOCTYPE html>
	 <html>
	 <head>
	 	<link rel="stylesheet" type="text/css" href="style4.css">
	 	<title>status</title>
	 	<style>
	 		table{
	 			border: 1px solid black;
	 			font-family: sans-serif;
	 			border-collapse: collapse;
  				border-radius: 1em;
  				overflow: hidden;
	 		}
	 		td,th {
	 			border: 1px solid black;
	 			border-radius: 5px;
	 			padding: 1em;
  				background: #ddd;
  				border-bottom: 2px solid white; 
	 			
	 		}
	 		td a{
	 			color: blue;
	 			font-weight: bold;
	 		}
	 		.back{
	 			/*background: #008000;*/
	 		}

	 	</style>
	 </head>
	 <body>
	 	<div>

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
	<div class="back">
	 		<table style="margin:100px 100px 100px 400px">
	 			<tr><th>Class</th><th>Admissions Filled</th><th>Status</th></tr>
	 			<tr><td>LKG</td> <td><?php echo $row['lkg']?></td> <td><?php if($row['lkg']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo " for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>UKG</td> <td><?php echo $row['ukg']?></td> <td><?php if($row['ukg']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo " for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>1st</td> <td><?php echo $row['first']?></td> <td><?php if($row['first']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo " for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>2nd</td> <td><?php echo $row['second']?></td> <td><?php if($row['second']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>3rd</td> <td><?php echo $row['third']?></td> <td><?php if($row['third']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>4th</td> <td><?php echo $row['fourth']?></td> <td><?php if($row['fourth']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>5th</td> <td><?php echo $row['fifth']?></td> <td><?php if($row['fifth']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>6th</td> <td><?php echo $row['sixth']?></td> <td><?php if($row['sixth']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>7th</td> <td><?php echo $row['seventh']?></td> <td><?php if($row['seventh']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>8th</td> <td><?php echo $row['eight']?></td> <td><?php if($row['eight']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			<tr><td>9th</td> <td><?php echo $row['nine']?></td> <td><?php if($row['nine']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 		   <tr><td>10th</td> <td><?php echo $row['tenth']?></td> <td><?php if($row['tenth']<$row['maxi']){ echo "Fill The "?><a href="form.php">Form</a><?php echo "  for Admission";}else{echo "Sorry Admissions Are Closed";} ?></td></tr>
	 			
	 			
	 		</table>
	</div>
	 </body>
	 </html>
	
	