<?php   
session_start();   
    $conn = mysqli_connect("localhost", "root", "", "xenonstack");

	if($conn === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
    if($_SERVER["REQUEST_METHOD"] == "POST") {

	
	$email = $_POST["email"];
	$password = $_POST["password"];
	 
	
	} 
      
        $sql = "select *from users where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1> Login successful</h1> <a href='index.php' >Go back</a>";  
exit();
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>'.'<a href='login.php'> Go Back </a>";  
        }     


?>  