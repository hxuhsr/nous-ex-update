<?php
include 'modules/navbar.php';
include 'modules/fonts.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="styles/sign-up.css">

</head>
<body>

    <video id="video-bg" autoplay loop muted>
        <source src="styles/res/video1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>


    <div class="main-container">
        <div class="component-container">

            <h1 class="lbl-title"> NOUS X SIGN-UP </h1>

                <div class="email-container"> 
                    <input class="textbox-em" type="email" name="email" placeholder="Email" required> <br>
                </div>

                <div class="password-container">
                    <input class="textbox-pw" id="password" name="password" type="password" placeholder="Password" required>
                    <img src="styles/res/hide.png" id="eyeicon" width="25px">
             

                </div>
                <button class="btn-signup" type="submit"> SIGNUP </button>
                <p class="lbl-login"> <a href="login.html"> Already have an account? </a> </p>

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
