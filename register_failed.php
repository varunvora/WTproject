<?php 
		include_once 'load.php';
		include_once 'config.php';

		if(isset($_POST['butt'])){
			$username = $_POST['userid'];
			$password = $_POST['password'];
			$password2 = $_POST['password1'];

				$check = "SELECT * from users WHERE username = '$username'";
				$result = mysqli_query($link, $check);

	
	if(!mysqli_num_rows($result))
       {	$sql = "INSERT INTO users(username, password,score) VALUES('$username', '$password', '0')";
			mysqli_query($link, $sql);
		}
         
	else {
		echo "User already exists, please choose a different username ";
       }		
}

?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Signup.css">
		<link rel = "stylesheet" type="text/css" href="index.css"/>
		<link rel="shortcut icon" type="image/x-icon" href="img src= 'CHEATit.png'" />
	</head>
  <body >
 	<header id = "header">
		<ul>
			<li style="text-align: right; width: 8%;"><a href="index.php"> CHEATiT </a></li>
			<li style="text-align: right; width: 75%;"><a href = "Submit.php">Submit</a></li>
			<li style="text-align: right; width: 10%"><a href="profile.php"><?php echo $_SESSION['display_name'] ?></a></li>
		</ul>
	</header>
  <div id = 'page'>

<br/><pre style="position: absolute; top: 55px; color: rgb(201,12,12);">                                            Invalid Username or Password. Try again.</pre><br/> 
	<div id = 'signup'>
		<br />
	    <h3 id = "h" style="font-family: Helvetica;"> Create a new account </h3> 
		<form name = "myform" accept-charset="UTF-8" id="u" method = "post" action = "register.php">
		<input  id = "user" type = "text" name = "userid" placeholder = " Choose a Username" onfocus = "function focus()" onblur = "function blur()">
		<span id = "usercheck" style = "color:red"></span></br>
		<input id = "pass" type = "password" name = "password" placeholder = " Password">
		<span id = "passcheck" style = "color:red"></span></br>
		<input id = "pass" type = "password" name = "password1" placeholder = " Verify Password">
		<span id = "pass1check" style = "color:red"></span></br>
		<input id = "remember" type = "checkbox" value = "checked" >remember me</br>
		<input id = "button" type = "submit" name = "butt" value = "Sign up"> </br>
	</form>

	<br /><br />
	<div id = "signin">
		<h3 id = "hx" style="font-family: Helvetica;"> Login </h3>
		<form  name = "form1" method = "post" action = "login.php">
		<input  id = "user1" type = "text" name = "userid" placeholder = " Username"></br>
		<input id = "pass1" type = "password" name = "password" placeholder = " Password"> </br> 

		<input id = "button1" type = "submit" name = "but" value = "Login"> </br>
	</form>
	</div>
	 </br>
	 </div>
	</div>

	<br /><br /><br /><br /><br />
	<br /><br /><br /><br /><br /><br /><br /><br />
	<div style="position: relative; top:100px;">
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


<script type = "text/javascript">

	var message = "<?php echo '$message' ?>";	
	document.getElementById("u").addEventListener('submit', function(e){

		var user = document.myform.userid.value;
		var pass1 = document.myform.password.value;
		var pass2 = document.myform.password1.value;
		console.log(pass1);

	if(user == "" || name == null){
			e.preventDefault();
			document.getElementById("usercheck").innerHTML =" <img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Please enter your name";  
	}
	else if ((user!=null || user!= "") && ((pass1==null || pass2 == null ||pass1!=pass2))){
		e.preventDefault(); document.getElementById("usercheck").innerHTML = " <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
	}

	/*if(pass1 == null || pass1==''){
			console.log('jgf');
			e.preventDefault();
			document.getElementById("passcheck").innerHTML = "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Please enter your password";  
		}
	if(pass1!=null && pass2 == null){
			console.log('sjgfv');
		document.getElementById("passcheck").innerHTML = " <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>"; 
		}
		
		
		
	else if (pass1!=pass2 || pass2==null ){
		if(pass1==null){
			
			
			e.preventDefault();
			document.getElementById("pass1check").innerHTML =  "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/>";
		
		}
			e.preventDefault();
			document.getElementById("pass1check").innerHTML =  "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/>The passwords do not match!";
		}
		
	else if((pass1==pass2) && ((pass2!=null) || (pass2!=""))){
			document.getElementById("pass1check").innerHTML = " <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
			
		}*/
		
		if(pass1==null || pass1 == "" ){
			e.preventDefault();
			document.getElementById("passcheck").innerHTML = "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Please enter your password";
		}
		else if(pass1!=null && (pass2=='' || pass2==null)){
			e.preventDefault();
			document.getElementById("passcheck").innerHTML =  " <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
			document.getElementById("pass1check").innerHTML =  "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/>The passwords do not match!";	
		}	 
		else if(pass1!=pass2){
			e.preventDefault();
			document.getElementById("pass1check").innerHTML =  "<img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/>The passwords do not match!";	
		}
		else if(pass1 == pass2 && user!= null){
			document.getElementById("usercheck").innerHTML =  " <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
			document.getElementById("passcheck").innerHTML =  " <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
			document.getElementById("pass1check").innerHTML =  " <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
		}
			
	});
	
  
</script>

</html>
	
		