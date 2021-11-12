<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'bopt', 'br_AQ=yl]x_v', 'bopt');

// get the post records
$instname = $_POST['instname'];
$natsid = $_POST['natsid'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5= $_POST['n5'];
$nat1 = $_POST['nat1'];
$nat2 = $_POST['nat2'];
$nat3 = $_POST['nat3'];
$nat4 = $_POST['nat4'];
$nat5 = $_POST['nat5'];
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];

// database insert SQL code
$sql = "INSERT INTO `instreg` (`instname`, `natsid`, `n1`, `n2`, `n3`, `n4`, `n5`, `nat1`, `nat2` , `nat3`, `nat4`, `nat5`, `c1` , `c2` , `c3` , `c4` , `c5`) VALUES ('$instname', '$natsid', '$n1', '$n2', '$n3', '$n4', '$n5' , '$nat1' , '$nat2' ,'$nat3', '$nat4', '$nat5' , '$c1' , '$c2' , '$c3' , '$c4' , '$c5')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your Profile Has Been Created Sucessfully <br> <br>";

    header("location: instreg_details.html");
}
}
else
{
	echo "You are not eligible";
	
}