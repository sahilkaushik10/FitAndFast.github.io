<?php
	$link = mysqli_connect("localhost", "root", "", "xenonstack");
 
		// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	if($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
}

	$sql = "INSERT INTO users (name, email, mobile, password) VALUES ('$name','$email','$mobile','$password')";
	if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    header('Location: index.php');
	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
 
mysqli_close($link);
?>
