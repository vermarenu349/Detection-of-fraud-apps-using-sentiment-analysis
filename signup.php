<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	 echo 'not connected to database';
}
if(!mysqli_select_db($con,'login'))
{
	echo 'database not selected';
}
$User_name=$_POST['username'];
$Contact=$_POST['contact'];
$Password=$_POST['pass'];
$sql="INSERT INTO users(username,password,contact_no) VALUES('$User_name','$Password',$Contact)";
if(!mysqli_query($con,$sql))
{
	echo 'Not registered';
} 
else
{
	//echo 'Registered';

echo '<script type="text/javascript">alert("registration successfull")</script>';
header("refresh:0;url=userlogin.html");
}
?>