<?php

	$servername = "localhost"; 
	$user_name = "root"; 
	$pass_word = ""; 
	$dbname = "schooldb"; 
	
			
	$connect =  new mysqli($servername, $user_name,$pass_word, $dbname);
	
	if($connect -> connect_error){
				die("Connection failed. Check server");
			}

?>