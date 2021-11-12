<?php
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'bopt', 'br_AQ=yl]x_v', 'bopt');

// get the post records
$name = $_POST['name'];
$natsid = $_POST['natsid'];
$manpower1 = $_POST['manpower1'];
$manpower2 = $_POST['manpower2'];
$manpower3 = $_POST['manpower3'];
$manpower4 = $_POST['manpower4'];
$enApp1= $_POST['enApp1'];
$enApp2 = $_POST['enApp2'];
$enApp3 = $_POST['enApp3'];
$enApp4 = $_POST['enApp4'];


// database insert SQL code
$sql = "INSERT INTO `estabreg` (`name`, `natsid` , `manpower1` , `manpower2`, `manpower3` , `manpower4` , `enApp1` , `enApp2` , `enApp3` , `enApp4`) VALUES ('$name' , '$natsid' , '$manpower1' , '$manpower2' , '$manpower3' , '$manpower4' , '$enApp1' , '$enApp2' , '$enApp3' , '$enApp4')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Your Profile Has Been Created Sucessfully <br> <br>";

    header("location: estabreg_details.html");
}
}
else
{
	echo "You are not eligible";
	
}