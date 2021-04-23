
<!DOCTYPE html> <!-- The new doctype -->

<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Detection of fraud apps </title>

    <link rel="stylesheet" type="text/css" href="styles.css" />

    <!-- Internet Explorer HTML5 enabling script: -->

    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <style type="text/css">

            .clear {
                zoom: 1;
                display: block;
            }

        </style>

    <![endif]-->

</head>
<body>

    <section id="page"> <!-- Defining the #page section with the section tag -->

    <header> <!-- Defining the header section of the page with the appropriate tag -->

        <h1 style="font-family:Algerian; font-size:20;"><center>USER DETAILS</center></h1>


        <nav class="clear"> <!-- The nav link semantically marks your main site navigation -->

            <ul>
                <li><a href="globalpage.html">back</a></li>
              </ul>

        </nav>

    </header>
	 <!-- Article 1 start -->

    <div class="line"></div>  <!-- Dividing line -->

    <article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->

    <!--    <h2>About</h2>

        <div class="line"></div>

        <div class="articleBody clear">

            
              <p> It maintains and process the information, review and rating of the application. So it will be easier to decide which application is fraud or not. Multiple applications can be processed at a time with the web applications. Also user can not always get correct or true reviews about the product on internet. So review/rating will be judged by the user and it would b eeasy for user to predict the application as genuine or fraud</p>

            <p></p>
			<figure> <!-- The figure tag marks data (usually an image) that is part of the article -->
                 <!--  <marquee> <img src="images (3).jpeg" width="1080" height="520" /><img src="images (2).jpeg" width="1080" height="520"/></marquee>

            </figure>

        </div>-->
		<table style="width:100%">
<tr>
<th><center> ID</center></th>
<th><center>USERNAME</center></th>
<th><center> CREATED</center></th>
<th><center>CONTACT_NUMBER</center></th>
</tr>

<?php
$conn=mysqli_connect("localhost","root","","login");
if($conn->connect_error)
{
 die("Connetion failed".$conn->connect_error);
}
$sql="select id,username,created,contact_no from users";
$result=$conn->query($sql);

if($result->num_rows>0)
{
 while($rows=$result->fetch_assoc())
 {
 echo "<tr><td><center>".$rows["id"]."</center></td>".
   "<td><center>".$rows["username"]."</center></td>".
    "<td><center>".$rows["created"]."</center></td>".
    "<td><center>".$rows["contact_no"]."</center></td></tr>";
 }
 echo "</table>";
}
else
{ echo "0 result";
}
$conn->close();
?>

</table>

  </article>

    <!-- Article 1 end -->
	<footer> <!-- Marking the footer section -->

            <div class="line"></div>

            <!-- Change the copyright notice -->

        </footer>

    </section> <!-- Closing the #page section -->

    <!-- JavaScript Includes -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="jquery.scrollTo-1.4.2/jquery.scrollTo-min.js"></script>
    <script src="script.js"></script>

    </body>

</html>