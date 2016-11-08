<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "cheatsheet";
	$link=mysqli_connect($dbhost,$dbuser,$dbpass ) or die('cannot connect to the server'); 
	mysqli_select_db($link, $dbname ) or die('database selection problem');
?>