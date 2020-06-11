<?php
	include_once 'C:/xampp/htdocs/lab5/bd.php';

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['submit']))
	{	
		$name = filter($_POST['name']);
		$email = filter($_POST['email']);
		$message = filter($_POST['message']);
		saveFeed($name, $email,$message);
		include('C:/xampp/htdocs/lab5/index.php');
	}	
?> 
