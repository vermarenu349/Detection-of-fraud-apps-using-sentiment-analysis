<!DOCTYPE html>
<html>
    <head>
        <title>
           post
        </title>
		
        <style>
             form{
			   background-color: rgba(0,0,0,0.6);
                max-width: 540px;
                margin-left: 29%;
                margin-right: 25%;
				column-width:280px;
				column-height:100px;
				margin-top: 4%;
               text-align:center;
               }
            th{
                font-size: 33px;
				text-align:center;
            }
            td{
                font-size: 21px;
				text-align:center;
            }
            body{
                background:url('natural.png') no-repeat;
                background-color: black;
                background-size: cover;
                color:white;
				text-align:center;
				
            }
            .submit
            {
                padding-left: 30px;
                padding-top: 6px;
                padding-bottom: 6px;
                padding-right: 40px;
                color:black;
                font-size: 22px;
            }
           input{
               padding: 4px;
               border-radius: 6px;
            }
.image{
column-width:10px;
column-height:10px;
}
     .submit:hover{
             background-color: darkgrey;
            color: white;
			} 
			.marquee{
			/*background-image:url("images (3).jpeg");*/
			  min-height: 400px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  -webkit-animation:marquee 4s infinite linear;
  text-align:center;
  dislay:inline-block;
			}
			
        </style>
    </head>
    <body>
	<div id="marquee" class="marquee">
       <form>
            <table cellpadding="25">
                <th colspan="2">
                  <Center>  APPS</center>
                </th>
				<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'login');
$res=mysqli_query($con,"select * from upload");
if($res)
{
while($row=mysqli_fetch_array($res))
{
 ?>
    <tr>
  <td><p><a href="<?php echo $row['href'];?>"><?php echo $row['app_name'];?></a></p></td>
    </tr>
    <?php
            /*   <tr colspan="2">
                    <td><a href="upload1.html">app name</a></td>
                   <td><input type="text" size="35"  name="name"required></td>
                </tr>
				<tr colspan="2">
                    <td><a href="upload1.html">app information</a></td>
                  <td><textarea name="information" size="100"> enter info here</textarea><input type="text" size="120"  name="information" required></td>
                </tr>
               <tr colspan="2">
                    <td><a href="upload1.html">review 1</a></td>
                 <  <td><input type="text" size="35"  name="review1" required></td>
                </tr>
				<tr colspan="2">
                    <td><a href="upload1.html">review 2</a></td>
                  <td><input type="text" size="35"  name="review2" required></td>
                </tr>
				<tr colspan="2">
                    <td><a href="upload1.html">review 3</a></td>
                   <td><input type="text" size="35"  name="review3" required></td>
                </tr>
				<tr colspan="2">
                    <td><a href="upload1.html">UPLOAD APPS</a></td>
                   <td><input type="text" size="35"  name="review4" required></td>
                </tr>
				<tr colspan="2">
                    <td><a href="upload1.html">UPLOAD APPS</a></td>
                   <td><input type="text" size="35"  name="review5" required></td>
                </tr>
				
                 <tr colspan="2">
                    <td><a href="upload1.html">UPLOAD APPS</a></td>
                  <td> <input type="file" name="image" required ></td>
                  
                </tr>
				<tr colspan="2">
                    <td><a href="upload1.html">UPLOAD APPS</a></td>
                   <td><input type="text" size="25"  name="rating" required></td>
                </tr>
				<tr colspan="2">
                <th colspan="2"> <input type="submit"  value="Upload"  class="submit" >
                  </th>
                   </tr>*/
}
}
?>
            </table>
       </form>
		</div>
    </body>
</html>
