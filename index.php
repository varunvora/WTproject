<!doctype html>
<head>
	<title>Cheatit</title>
	<link rel = "stylesheet" type="text/css" href="index.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="img src= 'CHEATit.png'" />
	
	<?php
		include 'load.php';
		
		if (!isset($_SESSION['username']))
		{
			$let_like = 'hidden';
			echo( 
			"<div id = 'banner'>
				<img src = 'banner2.jpg' style='position: relative; width: 100%;'>
				<hgroup>
					<h1 class = 'greeting' style='color: white; top: 80px; font-size: 36px;''>Welcome to cheatit - the cheat sheet blog</h1>
					<h2 class = 'greeting' style='color: silver; top: 140px; font-size: 28px;''>A forum where <i>anyone</i> can post and access <i>all</i> cheat sheets on the internet</h2>
				</hgroup>

			<a href='register.php'><div style='position: absolute; left: 40%; top:220px;'' class='buttons'>
					<p>SIGN UP</p>
				</div></a>
				<a href='FAQs.php'><div style='position: absolute; left: 50%; top:220px;' class='buttons'>
					<p style='background-color: white; color: rgb(201,12,12);''>LEARN MORE</p>
				</div></a>
			</div>"); 
		} 
		else
		{
			$let_like = 'shown';
		}
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
	<br/><br/><br/>
	<aside style="float: right; position: relative; margin: 0.5%; margin-right: 5%; width: 23%;">
		<div style="background-color: white; padding: 3%; border-radius: 5px; margin-bottom: 10px;">
			<form method="POST" action="search.php">
				<input type="text" name="search" placeholder="search" style="border: none; font-size: 20px; width: 80%; padding: 5px;" />
				<input type="submit" value = "Q" style="width: 15%; color: white; font-family: segoe ui light; font-size: 18px; font-weight: bold; background-color: rgb(201,12,12); padding: 8px; border: solid 1px white; border-radius: 5px;">
			</form>
		</div>
		<div style="background-color: white; padding: 5%; border-radius: 5px;">
			<b>trending</b>
			<br/>
			<p>Engineering
			<p>DOTA 2
			<p>German grammar
			<p>fashion
			<p>trigonometry
			<p>CSS
			<p>Operational Amplifiers
			<p>Counter Strike
			<p>BASH commands
			<p>harmones
			<p>Morse code
			<p>Carpentry
			<p>Python numpy
			<p>PayTM vouchers
			<p>OLA and UBER calculations
			<p>Elementry Algebra
			<p>Ripple counters
		</div>
		<div style="position:relative; background-color: white; padding: 5%; border-radius: 5px; top: 10px;">
			
			<b>top contributors</b> <br />
			<?php 
				include_once 'config.php';

				$top_contrib_query= "SELECT username from users ORDER BY score desc";

				$result=  mysqli_query($link, $top_contrib_query);
				$num_rows= mysqli_num_rows($result);
				if(!$result) die();
				else{
					for($i=0; $i < $num_rows ; $i++) { 
						$single_post= mysqli_fetch_row($result);
					 	echo $single_post[0]; 
					 	echo "<br />";
					 	}
					 } 

			?>
		</div>
	</aside>

	<?php 
	include_once 'config.php';

	$post_query= "SELECT title, description, tag1, tag2, tag3, tag4, tag5, file, username, score, id FROM data_value ORDER BY score desc";

	$result=  mysqli_query($link, $post_query);
	$num_rows= mysqli_num_rows($result);
	if(!$result) die();
	else{
		for($i=0; $i < $num_rows ; $i++) { 
			$single_post= mysqli_fetch_row($result);
			echo
			"<article class = 'display_post' id = '$single_post[10]'>
				<section>
					<div class='buttons'>
						<form action = 'like.php' method = 'POST' id = 'liker'> 
								<input type = 'submit' value = ' 5' style = 'font-family: webdings; background-color:white; font-size: 25px; color: rgb(201,12,12); border:none; visibility : $let_like; margin-left: 4px;'>
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

	<div style="position: relative; top:50px;"> 
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
<script type="text/javascript">
	var elem = document.getElementById('like');
	elem.onclick = function()
	{
		var form_like = document.getElementById('liker');
		form_like.Submit();
	}
</script>
</html>