<?php
	
	include 'connection.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {

	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	echo $name;
	echo $email;
	echo $mobile;
	echo $password;
	echo $cpassword;
	exit();
			
	
	}
