<DOCTYPE! html>

<head>

<title> Submit Story </title>
<link rel = "stylesheet" type="text/css" href="index.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img src= 'CHEATit.png'" />
<style type="text/css">
	
	body{
		color: rgb(201, 12, 12); font-family: Helvetica;
	}
	h1.underline{
		text-align: left; font-weight: bold; font-family: Helvetica;
	}
	h1.underline1{
		text-indent: -300px; font-weight: bold; font-family: Helvetica;
	}	
	h3.subHeadMain{
		font-weight: bold; text-align: left; font-size: 2em;
	}
	h4.subHeadsubMain{
		text-align: left;
	}
	p.alignment{
		text-align: left;
	}
	
	textarea{
		display: block; margin-left: auto; margin-right: auto;
	}
	input{
 		-moz-border-radius: 5px;
 		border-radius: 5px;
    	padding:10px;
	}

</style>

<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		session_destroy();

		header("Location:register.php");
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

	<center>

	<br /><br /><br />

	<h1 class="underline1"> Submit cheatsheet </h1> <br />

	<form action="Upload.php" method="POST" id="Submission" enctype="multipart/form-data">

		<input type="text" id="title" name="title" placeholder="*Title" size="80px"/> <br /> <br />
		<input type="text" id="description" name="description" placeholder="*Description" size="80px"/> <br /> <br />
		Enter keywords relevant to your cheat sheet as tags to help users search for it
		<table>
			<tr>
				<td> <input type="text" id="tag1" name="tag1" placeholder="*Enter tags" size="13px" /> </td>
				<td> <input type="text" id="tag2" name="tag2" placeholder="*ex. Subject" size="13px" /> </td>
				<td> <input type="text" id="tag3" name="tag3" placeholder="*ex. University" size="13px" /> </td>
				<td> <input type="text" id="tag4" name="tag4" placeholder="*ex. Topics" size="13px" /> </td>
				<td> <input type="text" id="tag5" name="tag5" placeholder="*ex. Alternate" size="13px" /> </td>
			</tr>
		</table>
		<br /> <br />

		Select file to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" name="submit" value="POST" style="background-color: rgb(201,12,12); padding: 10px; color: white; border: solid 1px; border-color: rgb(201,12,12); margin: 2px;">
		<input type="reset" name="reset" value="CLEAR" style="background-color: white; padding: 10px; color: rgb(201,12,12); border: solid 1px; border-color: rgb(201,12,12); ">
	</form>

	Form Incorrectly Filled. Please Try Again. <br />
	Note: *Required Field
	</center>
	<div style="position: relative; top:250px;">
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
					<td>Varun Y Vora</td>
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
