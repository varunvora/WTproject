<?php 
		include_once 'config.php';
		$userid= $_POST['username'];
		$postid= $_POST['postid'];

		$query1= "UPDATE data_value SET score = (score+1) WHERE id = '$postid';";
		$query2= "UPDATE users SET score = (score+1) WHERE username = '$userid';";
		mysqli_query($link, $query1);
		mysqli_query($link, $query2);

		header("Location:index.php");
 ?>