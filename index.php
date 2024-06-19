<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<style>
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login_box {
        position: absolute;
        height: 900px;
        width: 500px;
        background-color: white;
        border-radius: 10px;
        border: solid white;
        display: flex;
        justify-content: center;
    }

    .heading {
        font-size: xxx-large;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: lighter;
    }

    .form {
        margin-top: 150px;
        position: absolute;
    }

    input[type=email],
    input[type=password] {
        font-size: larger;
        width: 400px;
        padding: 7px 43px;
        height: 40px;
        border: none;
        box-sizing: border-box;
        outline: none;
        font-family: Calibri;
        border-bottom: solid rgb(255, 170, 170) 2px;
    }

    .username {
        position: relative;
        margin: 30px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        size: x-large;
    }

    input[type=email]:focus,
    input[type=password]:focus {
        border-bottom: solid 2px black;
        transform-origin: left;
        transition-duration: 1s;
    }

    .photo {
        opacity: 50%;
        position: absolute;
        margin: 7px 8px;
    }

    .forgot {
        position: absolute;
        top: 380px;
        right: 60px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .button {
        font-size: x-large;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode';
        padding: 15px 170px;
        margin: 40px 26px;
        border: none;

        background-color: rgb(90, 90, 200);
        border-radius: 50px;
        cursor: pointer;
    }

    .signup {
        text-align: center;
        position: absolute;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande';
        font-size: x-large;
        color: rgb(90, 80, 80);
        top: 690px;
    }

    .signup-link:link {
        display: block;
        text-decoration: none;
        color: rgb(90, 80, 80);
        margin: 30px;
    }

    .signup-link:HOVER {
        display: block;
        text-decoration: none;
        color: rgb(60, 0, 255);
        margin: 30px;
    }
</style>

<body>

    <div class="container">
        <img src="login_page_bg.jpg" height="950px" width="100%" alt="">
        <div class="login_box">
            <h2 class="heading">Login</h2>
            <div class="form">
                <form action="action_page.php" method="POST">
                    <p class="username"> Email <br> <br>
                        <span class="photo">
                            <img src="images/user_logo.png" height="26px" alt="">
                        </span>
                        <input type="email" name="email" placeholder="Type your Email">
                    </p>
                    <p class="username"> Password <br><br>
                        <span class="photo">
                            <img src="images/password.png" height="25px" alt="">
                        </span>
                        <input type="password" name="pass" placeholder="Type your Password">
                    </p>
                    <input type="submit" value="Login" class="button">
                </form>
            </div>
            <div class="forgot">
                <a href="#" style="text-decoration: none; color: rgb(93, 75, 80);"> Forgot Password?</a>
            </div>
            <div class="signup">
                create account using <br>
                <a href="signup_page.php" class="signup-link">SIGN-UP</a>
            </div>
        </div>
    </div>
</body>

</html>