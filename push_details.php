<?php

include 'connect.php';


$name = mysqli_real_escape_string($db,$_POST['name']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$class = mysqli_real_escape_string($db,$_POST['class']);
$nationality = mysqli_real_escape_string($db,$_POST['nationality']);
$religion = mysqli_real_escape_string($db,$_POST['religion']);
$date = mysqli_real_escape_string($db,$_POST['date']);
$gender = mysqli_real_escape_string($db,$_POST['gender']);
$gname = mysqli_real_escape_string($db,$_POST['gname']);
$occupation = mysqli_real_escape_string($db,$_POST['occupation']);
$gphone = mysqli_real_escape_string($db,$_POST['gphone']);
$address = mysqli_real_escape_string($db,$_POST['address']);

echo $name."  ";
echo $email."  ";
echo $phone."  ";
echo $class."  ";
echo $nationality."  ";
echo $religion."  ";
echo $date."  ";
echo $gender."  ";
echo $gname."  ";
echo $address."  ";
echo $gphone;

$query = "select * from personal_info where name='$email'";
$query_res = mysqli_query($db,$query);
$row = mysqli_fetch_array($query_res);

if($row > 0){
	?> <script>alert("The Email-ID Already exists..Try Another");</script><?php
	header('location: form.php');

}
else
{
	$lkg_query= "SELECT * FROM `status_table` WHERE 1";

	$query_result = mysqli_query($db,$lkg_query);

	$row = mysqli_fetch_array($query_result);

	$_SESSION['class']=$class;

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


	if ($row[$val] >= 60) {
		
		$error="hjbvdbjdhj";

		echo "<script type='text/javascript'>alert('hmvdh');</script>";

		
		header('location: form.php');
		die("hjsdjkj");
	}

	$insert = "insert into personal_info values('$name','$phone','$class','$nationality','$religion','$date','$gender','$gname','$occupation','$gphone','$address','$email')";

	$ins_query = mysqli_query($db,$insert) or die(mysqli_error($db));

	

	header('location: payment.php');






}




