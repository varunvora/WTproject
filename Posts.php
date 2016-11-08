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

