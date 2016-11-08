<?php
	#this will be needed to be imported on every page to put the users name on the header
	session_start();
	if(isset($_SESSION['username']))
	{
		$_SESSION['display_name'] = $_SESSION['username'];


	}
	else
	{
		$_SESSION['display_name'] = 'Login';
	}
?>