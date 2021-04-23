    <!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>PHP Learning</title>
      
      
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
          <link rel="stylesheet" href="./style.css">
      
    </head>
    <body>
      <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">local Anomaly</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
        <div class="login-form">
          <form class="sign-in-htm" action="./api/user/login.php" method="GET">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>
          </form>
          <form class="sign-up-htm" action="local_login.php" method="POST">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input">
            </div>
            <div class="group">
              <label for="contact" class="label">Contact no.</label>
              <input id="contact" name="contact" type="contact" class="input" data-type="contact">
            </div>
            <div class="group">
              <label for="password" class="label"> Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign Up">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already Member?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
      <?php
$host = "localhost";
    $db_name = "login";
    $username = "root";
    $password = "";
    $conn=mysqli_connect($host,$username,$password,$db_name) or die("unable to connect");
	if($conn)
		echo"";
 $username=$_POST['username'];
 $sql="insert into users(username) values('$username')";
 mysqli_query($conn,$sql);
 $contact=$_POST['contact'];
 $sql="insert into users(contact_no) values('$contact')";
 mysqli_query($conn,$sql);
 $password=$_POST['password'];
 $sql="insert into users(password) values('$password')";
 mysqli_query($conn,$sql);
 
 ?>
      
    </body>
    </html>

   