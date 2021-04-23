<?php  
  /* $host="localhost";
		$user="root";
		$password="";*/
		 session_start();
if(isset($_POST["submit"])){  
if(!empty($_POST['username']) && !empty($_POST['contact'])) {  
    $user=$_POST['username'];  
    $contact=$_POST['contact'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'login') or die("cannot select DB");  
    $query=mysqli_query($con,"SELECT * FROM users WHERE username='$user' AND contact_no='$contact'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbcontact=$row['contact_no'];  
    }  
  
  
    if($user == $dbusername && $contact== $dbcontact)  
    {  
     
    $_SESSION['sess_user']=$user;  
  
    /*Redirect browser  */ 
   header("Location:reset.html");  
    }  
    } 
    else
    { 
  echo'<script type="text/javascript">alert("Invalid User Name")</script>'; 
    header("Location:FORGOT.HTML");	 
    }  
  
} else 
{  
    echo '<script type="text/javascript">alert("All fields required")</script>' ; 
    header("Location:FORGOT.HTML");  	
} 
}  
?>  