<?php
   include 'config.php';
	if(isset($_POST['but'])){
		$username = $_POST['userid'];
		$password = $_POST['password'];
		$check = "SELECT * from users WHERE username = '$username'";
		$result = mysqli_query($link, $check);
		if($_POST['userid'] == ""){
							session_destroy();
				header("Location:register_failed.php");
		}
		else if($_POST['password'] == ""){
							session_destroy();
				header("Location:register_failed.php");
	}

	else if(mysqli_num_rows($result)==0){
						session_destroy();
				header("Location:register_failed.php");
	}
	else {
		$check1 = "SELECT * from users WHERE username = '$username'";
		$result1 = mysqli_query($link, $check1);
		$actual = mysqli_fetch_array($result1);

		if($actual[1] == $password){
			session_start();
			$_SESSION['username']= $username;
			header("Location:profile.php");
		}
		else
			{ 
				session_destroy();
				header("Location:register_failed.php");
		}
	}
}
	
?>