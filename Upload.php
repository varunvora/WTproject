<?php
	session_start();
	$username= $_SESSION['username'];
	if(!isset($_SESSION['username'])){
		session_destroy();

		header("Location:register.php");
	}
	include 'config.php';
	$title= $description= $tag1= $tag2= $tag3= $tag4= $tag5= "";
	$result1= 0;

	if(isset($_POST['submit'])){  

		if(empty($_POST['title'])){
			$result1= 1;
		}
		else{
			$title= test_data($_POST['title']);
		}

		if(empty($_POST['description'])){
			$result1= 1;
		}
		else{
			$description= test_data($_POST['description']);
		}
		
		if(empty($_POST['tag1'])){
			$result1= 1;
		}
		else{
			$tag1= test_data($_POST['tag1']);
		}

		if(empty($_POST['tag2'])){
			$result1= 1;
		}
		else{
			$tag2= test_data($_POST['tag2']);
		}

		if(empty($_POST['tag3'])){
			$result1= 1;
		}
		else{
			$tag3= test_data($_POST['tag3']);
		}

		if(empty($_POST['tag4'])){
			$result1= 1;
		}
		else{
			$tag4= test_data($_POST['tag4']);
		}

		if(empty($_POST['tag5'])){
			$result1= 1;
		}
		else{
			$tag5= test_data($_POST['tag5']);
		}

		$file = $_FILES['fileToUpload']['name'];
   	 	$file_loc = $_FILES['fileToUpload']['tmp_name'];
 		$file_size = $_FILES['fileToUpload']['size'];
 		$file_type = $_FILES['fileToUpload']['type'];
 		$folder="uploads/";
 
 		move_uploaded_file($file_loc,$folder.$file);

 		if($result1== 1)
 			header("Location:Failed_Submit.php");
 		else{
 			$sql="INSERT INTO data_value(title, description, tag1, tag2, tag3, tag4, tag5, file, type, size, username, score) VALUES('$title', '$description', '$tag1', '$tag2', '$tag3', '$tag4', '$tag5', '$file','$file_type','$file_size', '$username', '0')";
 			$result=mysqli_query($link, $sql);
 	
 			if(!$result)
 			echo('Did not upload!');
 			else 
 			header("Location:index.php");
 		}
 	
 	}


 	function test_data($data){
 		$data= trim($data);
 		$data= stripslashes($data);
 		return($data);
 	}

 ?>