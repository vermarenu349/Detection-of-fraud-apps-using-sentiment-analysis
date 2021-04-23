<html>
<head>
<title>details</title>
<style>
body{
    background:url('natural.png') no-repeat;
    background-size: cover;
    font-family:Times new roman;
    color:black;
	font-size:45px;
	padding-top:22px;
	padding-bottom:20px;
	
	
}
table,th,td{
border:1px solid #8b0000;
border-radius:5px;
border-collapse:separate;
border-style:outset;
}
th,td{
padding:15px;
font-size:20px;
}
th{
background-color:green;
text-align:center;

border-collapse:separate;
}
.bg-img {
  /* The image used */
  background-color:pink;

  /* Control the height of the image */
  min-height: 800px;
  min-width:600px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: absolute;
}


/*tr:hover{background-color:#dcdcdc;*/}
</style>
</head>
<body>
<div class="bg-img">
          <u><center>UPLOADED APPS</center></u><br>
           <table style="width:100%">
<tr>
<th> APP Name</th>
<th> APP INFORMATION</th>
<th> REVIEW1</th>
<th> REVIEW2</th>
<th>REVIEW3</th>
<th>REVIEW4</th>
<th>REVIEW5</th>
<th>APP IMAGE</th>
<th>APP RATING</th>
</tr>
<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'login');
$res=mysqli_query($con,"select app_name,app_info,review1,review2,review3,review4,review5,app_image,rating from upload");
if($res)
{
while($row=mysqli_fetch_array($res))
{
 ?>
    <tr>
    <td><p><?php echo $row['app_name']; ?></p></td>
    <td><p><?php echo $row['app_info']; ?></p></td>
    <td><p><?php echo $row['review1']; ?></p></td>
	<td><p><?php echo $row['review2']; ?></p></td>
	<td><p><?php echo $row['review3']; ?></p></td>
	<td><p><?php echo $row['review4']; ?></p></td>
	<td><p><?php echo $row['review5']; ?></p></td>
	<td><p><img src="<?php echo $row['app_image'];?>" style="height:100px;width:150px"> </p></td>
	<td><p><?php echo $row['rating']; ?></p></td>
    </tr>
    <?php
	
	
}

}
?>
</table>
</div>
</body>
</html>

