<html>
<head>
<style>
body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("Instagram.jpg");

  /* Control the height of the image */
  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 500px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

tr:focus, tr:focus {
  background-color: #ddd;
  outline: border-box;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="bg-img">
  <form action="algorith.php" class="container" method="POST">
  <table  cellpadding="10">
    <th><h1>All Bank Balance Enquiry Check</h1></th>
	<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'login');
$res=mysqli_query($con,"select * from upload where app_name = 'All Bank Balance Enquiry Check'");
if($res)
{
while($row=mysqli_fetch_array($res))
{
 ?>
<tr><td><center><img src="<?php echo $row['app_image'];?>" style="height:100px;width:150px"></center></td></tr>
    <tr><td><b>REVIEW1</b></td></tr>
	<tr><td><?php echo $row['review1']; ?></td></tr>
  <!--  <input type="text" name="review" required>-->
	<tr><td><b>REVIEW2</b></td></tr>
	<tr><td><?php echo $row['review2']; ?></td></tr>
 <!--   <input type="text" name="review" required>-->
	<tr><td><b>REVIEW3</b></td></tr>
		<tr><td><?php echo $row['review3']; ?></td></tr>
   <!-- <input type="text" name="review" required>-->
	<tr><td><b>REVIEW4</b></td></tr></label>
	<tr><td><?php echo $row['review4']; ?></td></tr>
  <!--  <input type="text" name="review" required>-->
	<tr><td><b>REVIEW5</b></td></tr>
	<tr><td><?php echo $row['review5']; ?></td></tr>
  <!--  <input type="text" name="review" required>-->
	<tr><td><b>RATING</b></td></tr>
	<tr><td><?php echo $row['rating']; ?></td></tr>
   <!-- <input type="text" name="review" required>-->
    <?php
	}
	}
	?>



  <!--  <label for="psw"><b>REVIEW2</b></label>
    <input type="password" name="psw" required>-->
<!--<input type="submit" name="submit" class="button" value="check">-->
  <tr><td><button type="submit" class="btn" name="submit">check</button></td></tr>
  </table>
  </form>
</div>
</body>
</html>