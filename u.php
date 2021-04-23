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
$name=$_POST['name'];
$information=$_POST['information'];
$review1=$_POST['review1'];
$review2=$_POST['review2'];
$review3=$_POST['review3'];
$review4=$_POST['review4'];
$review5=$_POST['review5'];
$Image=$_POST['image'];
$rating=$_POST['rating'];
$href=$_POST['href'];

$sql="INSERT INTO upload(app_name,app_info,review1,review2,review3,review4,review5,app_image,rating,href) VALUES('$name','$information','$review1','$review2','$review3','$review4','$review5','$Image','$rating','$href')";

if(!mysqli_query($con,$sql))
{
echo '<script>alert("Error Occur While Uploading")</script>';	
header("refresh:0;url=upload1.html");
} 
else
{
 echo '<script>alert("Post add successfully")</script>';
 header("refresh:0;url=viewapp.php");
}
?>