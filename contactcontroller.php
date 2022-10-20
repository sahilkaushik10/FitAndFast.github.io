<?php
	$link = mysqli_connect("localhost", "root", "", "xenonstack");
 
		// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	if($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST["name"];
	$email = $_POST["email"];
	$description = $_POST["description"];
}

	$sql = "INSERT INTO contactusquery (name, email, description) VALUES ('$name' ,'$email','$description')";
	// $sql = "INSERT INTO users (name, email, mobile, password) VALUES ('$name','$email','$mobile','$password')";
	if(mysqli_query($link, $sql)){
    echo '<script>alert("Thanks query Submitted")</script>';
    header('Location: index.php');

	} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
 
mysqli_close($link);
?>
