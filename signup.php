<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div id="login-box">
        
        <div class="left">
            <h1>Sign Up</h1>
            <form action="registercontroller.php" method="post">
                <input type="text" name="name" placeholder="Enter your name">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="mobile" placeholder="Mobile">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="cpassword" placeholder="Confirm Password">
                <input type="submit" name="signup-button" value="Sign Up">
            </form>
            
        </div>
        <div class="right">
            <span class="signinwith">Sign Up <br> Using <br></span>
            <button class="social google">Google</button>
            <button class="social twitter">Twitter</button>
            <button class="social facebook">Facebook</button>
        </div>
        <div class="next">
           <b>Have an account?</b> <br>
        <a href="login.php">Sign In!</a></div>
    </div>

    <!-- <script>
         const Yname = document.getElementsByTagName("name");
        window.onload = () => {
        Yname.focus();
}
    </script> -->
    
</body>
</html>