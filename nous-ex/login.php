<?php
include 'modules/navbar.php';
include 'modules/fonts.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="styles/login.css">

</head>
<body>


    <video id="video-bg" autoplay loop muted>
        <source src="styles/res/video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>


    <div class="main-container">
        <div class="component-container">

            <h1 class="lbl-title"> NOUS X LOGIN </h1>

            <div class="email-container"> 
                <input class="textbox-em" 
                type="email" 
                placeholder="Email" 
                required> 
                <br>
            </div>

            <div class="password-container">
                <input class="textbox-pw"
                id="password" type="password"
                placeholder="Password"
                required>

                <img src="styles/res/view.png" id="eyeicon" width="25px">
                
            </div>
           
            <p class="lbl-forgot"> <a href="recovery-pw.html">Forgot password?</a> </p>
            <button class="btn-login" aria-hidden="true" > LOGIN </button>
            <p class="lbl-signup"> <a href="sign-up.html"> Don't have an account yet? </a> </p>

        </div>
    </div>
    
    <script> 
     let eyeicon = document.getElementById("eyeicon");
     let password = document.getElementById("password");

     eyeicon.onclick = function() 
     {
         if (password.type == "password") 
         {
         password.type = "text";
         eyeicon.src = "styles/res/view.png";
         } else {
        password.type = "password";
        eyeicon.src = "styles/res/hide.png"; 
    }
}
    </script>

</body>
</html>