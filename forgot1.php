<?php
	if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root","");
		
		$condition = "";
		if(!empty($_POST["username"])) 
			$condition = " usename = '" . $_POST["username"] . "'";
		if(!empty($_POST["contact"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = "contact_no= '" . $_POST["contact"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from users " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			header("Location:userlogin.html");
		} else {
			//$error_message = 'No User Found';
			//header("Location:FORGOT.HTML");
			echo"jjj";
		}
	}
?>