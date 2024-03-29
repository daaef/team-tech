<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Tech</title>
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="main-container uk-flex uk-flex-wrap">
    <div class="uk-width-3-5@m write-img-container uk-flex-last@m">
        <div class="logo-holder uk-width-1-1@s uk-text-right">
            <img src="img/logo.png" alt="">
        </div>
        <h2 class="uk-margin-small uk-margin-large-top uk-text-bold">Welcome to TEAM TECH</h2>
        <h3 class="uk-margin-small uk-text-bold">COME LET'S BUILD SOMETHING GREAT</h3>
    </div>
    <div class="uk-width-2-5@m form-container uk-flex-first@m">
        <div class="form-holder signup toggleMe uk-width-2-3">
            <h3 class="team-name">TEAM TECH</h3>
            <p class="text">Create an account</p>
            <a href="#" class="sign-btn facebook btn"><span uk-icon="facebook"></span>Sign-up with Facebook</a>
            <a href="#" class="sign-btn google btn"><span uk-icon="google"></span>Sign-up with Google</a>
            <p class="uk-margin-top uk-margin-bottom">-or-</p>
            <form action="include/signup.php" method="POST">
                <div class="form-input">
                    <input id="fname" type="text" class="input" name="txtFullName"
                    <label class="fname" for="fname">Fullname</label>
                </div>
                <div class="form-input">
                    <input id="email" type="email" class="input" name="txtEmail">
                    <label class="email" for="email">Email</label>
                </div>
                <div class="form-input">
                    <input id="uname" type="text" class="input" autocomplete="off" name="txtUser">
                    <label class="uname" for="uname">Username</label>
                </div>
                <div class="form-input">
                    <input id="pword" type="password" class="input" autocomplete="off" name="txtPass">
                    <label class="pword" for="pword">Password</label>
                </div>
                <div class="form-input">
                    <input id="cpword" type="password" class="input" name="txtRePass">
                    <label class="cpword" for="cpword">Confirm Password</label>
                </div>
                <button type="submit" class="btn" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-holder signin toggleMe uk-width-2-3" hidden>
            <h3 class="team-name">TEAM TECH</h3>
            <p class="text">Welcome! Kindly Login</p>
            <a href="#" class="sign-btn facebook btn"><span uk-icon="facebook"></span>Login with Facebook</a>
            <a href="#" class="sign-btn google btn"><span uk-icon="google"></span>Login with Google</a>
            <p class="uk-margin-top uk-margin-bottom">-or-</p>
            <form action="include/login.php" method="POST">
                <div class="form-input">
                    <input id="suname" type="text" class="input" autocomplete="off" name="username">
                    <label class="suname" for="suname">Username or Email</label>
                </div>
                <div class="form-input">
                    <input id="spword" type="password" class="input" autocomplete="off" name="password" >
                    <label class="spword" for="spword">Password</label>
                </div>
                <button type="submit" class="btn" name="submit">Login</button>
            </form>
        </div>
        <p class="signin-link toggleMe">Already have an account? <a href="#"
                                                                    uk-toggle="target: .toggleMe; animation: uk-animation-fade; queued: true; duration: 300">
            Login</a></p>
        <p class="signin-link toggleMe" hidden>Don’t have an account?<a href="#"
                                                                        uk-toggle="target: .toggleMe; animation: uk-animation-fade; queued: true; duration: 300">
            Register</a></p>
    </div>
</main>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>