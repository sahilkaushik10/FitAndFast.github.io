<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
   
</head>
<body>
    <div class="loginbox">
        <img src="https://st3.depositphotos.com/1007566/12989/v/950/depositphotos_129895116-stock-illustration-hacker-character-avatar-icon.jpg" class="Logo">
        <h1>Login Here</h1>
        <form action="logincontroller.php" method="post">
            <p>Username</p>
            <input type="text" name="email" placeholder="Enter UID">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <a href="">
            <input type="submit" value="Login">
            </a>
            <div class="next">
            <a href="#">Forgot Password!</a><br>
            <b>Don't Have an account?</b> <br>
            <a href="signup.php">Sign Up</a>
        </div>
        </form>
    </div>
</body>
</html>