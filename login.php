<?php  
  /* $host="localhost";
		$user="root";
		$password="";*/
		 session_start();
if(isset($_POST["submit"])){  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'login') or die("cannot select DB");  
    $query=mysqli_query($con,"SELECT * FROM users WHERE username='$user' AND password='$pass'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
     
    $_SESSION['sess_user']=$user;  
  
    /*Redirect browser  */ 
   header("Location:user.html");  
    }  
    } 
    else
    { 
    echo '<script type="text/javascript">alert("Invalid User Name")</script>'; 
    header("refresh:0;url=userlogin.html");	
    }  
  
} else 
{  
    echo '<script type="text/javascript">alert("All fields required")</script>' ; 
    	    header("refresh:0;url=userlogin.html");	
} 
}  
?>  