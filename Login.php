<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="loginBox">            
            <img src="images\user.png" class="avatar">
            <h2>Login In</h2>
            <form name="loginform" method="POST" onsubmit="return valid()" action="index.php">
                <p>Email</p>
                <input name="email" type="text" placeholder="avatar@example.com">
                <div id="validemail"></div>
                <p>Password</p>
                <input name="password" type="password" placeholder="*******">
                <div class="validpassword"></div>
                <input type="Submit" value="Sign In">
                <a href="signup.php">Forget Password?</a>
            </form>
        </div>
    </body>
</html>