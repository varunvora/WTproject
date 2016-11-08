<!doctype html>
<head>
	<title>Cheatit</title>
	<link rel = "stylesheet" type="text/css" href="index.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="img src= 'CHEATit.png'" />

	<?php
		include_once 'load.php';
	
		if(!isset($_SESSION['username'])){
			session_destroy();
			header("Location:register.php");
		}
		include_once 'config.php';
		$username= $_SESSION['username'];

		$posts_query= "SELECT COUNT(*) FROM data_value WHERE username= '$username'";
		$score_query= "SELECT score FROM users where username= '$username'";

		$posts_result= mysqli_query($link, $posts_query);
		$score_result= mysqli_query($link, $score_query);

		$posts= mysqli_fetch_array($posts_result);
		$score= mysqli_fetch_array($score_result);

	?>
		
</head>
<body>
	<header id = "header">
		<ul>
			<li style="text-align: right; width: 8%;"><a href="index.php"> CHEATiT </a></li>
			<li style="text-align: right; width: 75%;"><a href = "Submit.php">Submit</a></li>
			<li style="text-align: right; width: 10%"><a href="profile.php"><?php echo $_SESSION['display_name'] ?></a></li>
		</ul>
	</header>

	<br/>
	<div style="position: absolute; top: 48px; background-color: black; width: 100%;">
		<center>
			<font color = "white" size="4">
				<font size = "7"> <?php echo $username ?></font>
				<br/>
				<font color="silver"> <?php echo $posts[0] ?> <a href="Submit.php" style= "color:silver; text-decoration:none;"> Posts </a>| Credits: <?php echo $score[0] ?> | <a href="logout.php" style= "color:silver; text-decoration:none;"> Logout</a> </font> 
				<br/>
				<br/>
			</font>
		</center>
	</div>

	<br /><br /><br /><br /><br /><br /><br /><br />

	<?php 
	include_once 'config.php';

	$post_query= "SELECT title, description, tag1, tag2, tag3, tag4, tag5, file, username, score, id FROM data_value WHERE username= '$username' ORDER BY score desc";

	$result1=  mysqli_query($link, $post_query);
	$num_rows= mysqli_num_rows($result1);
	if(!$result1) die();
	else{
		for($i=0; $i < $num_rows ; $i++) { 
			$single_post= mysqli_fetch_row($result1);
			echo
			"<article class = 'display_post' style='width: 90%;'>
				<section>
					<div class='buttons'>
						<form action = 'like.php' method = 'POST' id = 'liker'> 
								<input type = 'submit' value = ' 5' style = 'font-family: webdings; background-color:white; font-size: 25px; color: rgb(201,12,12); border:none; visibility : hidden; margin-left: 4px;'>
								<input type = 'text' name = 'postid' value = '$single_post[10]' style = 'visibility : hidden; width: 0px;'/>
								<input type = 'text' name = 'username' value = '$single_post[8]' style = 'visibility : hidden; width: 0px;'/>
						</form>
							<p> $single_post[9] </p>
					</div>
				</section>
				<p class = 'display_title'> <a href='uploads/$single_post[7]'> $single_post[0] </a> </p>
				<p class = 'display_description'> $single_post[1] </p>
				<p class = 'display_details'> $single_post[2] | $single_post[3] | $single_post[4] | $single_post[5] | $single_post[6] | by $single_post[8] </p>
			</article>";
		}
	}
	?>

	<div style="position: relative; top:500px;">
		<footer id = "footer">
			<center>
			<table style="margin: 1%; font-size: 14px; width: 40%; color: silver">
				<tr style="color: white;">
					<td>About</td>
					<td>Help</td>
					<td>Project</td>
					<td>Done By</td>
				</th>
				<tr><td></td><td></td><td></td><td></td></tr>
				<tr><td></td><td></td><td></td><td></td></tr>
				<tr><td></td><td></td><td></td><td></td></tr>
				<tr>
					<td><a href = "FAQs.php#about">about</a></td>
					<td><a href = "FAQs.php#site_rules">site rules</a></td>
					<td><a href = "FAQs.php#developers">presentation</a></td>
					<td>Mukund Sood</td>
				</tr>
				<tr>
					<td><a href = "FAQs.php#developers">source code</a></td>
					<td><a href = "FAQs.php">FAQ</a></td>
					<td><a href = "FAQs.php#developers">future</a></td>
					<td>Varun Vora</td>
				</tr>
				<tr>
					<td><a href = "FAQs.php#developers">advertise</a></td>
					<td><a href = "FAQs.php#developers">contact us</a></td>
					<td></td>
					<td>Vishal Krishna Kumar P.</td>
				</tr>
				<tr>
					<td><a href = "FAQs.php#blog">blog</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			</center>
		</footer>
	</div>

</body>

</html>