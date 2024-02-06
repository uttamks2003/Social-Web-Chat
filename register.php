


<!-- Register.php^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

<?php
include 'session-file.php';

include 'handlers/register_handler.php';
include 'handlers/login_handler.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBchat</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .alert{
            color: red;
            margin: auto;
        }
        .pswd_icon_bg{
            background: white;
            height: 32px;
            width: 30px;
            position: absolute;
            display: flex;
            align-content: center;
            overflow: hidden;
            margin: 0 0 0 525px;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            border: 2px solid #2980b9;
            transition: background-color 0.3s ease;
            cursor: pointer;
            margin: 10px;
        }
        .button:hover {
            background-color: #2980b9;
        }
        .button-signup {
            background-color: #2ecc71;
            border: 2px solid #27ae60;
        }
        .button-signup:hover {
            background-color: #27ae60;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            background-image: url('https://cutewallpaper.org/21/1920-x-1080-gif/1920x1080-Wallpapercartoon-Wallpapers-Driverlayer-Search-.gif');
            text-align: center;
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1 {
            color: #2A2F4F;
            font-size: 35px;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* This ensures that the wrapper takes the full height of the viewport */
        }
        .top-content {
            margin-bottom: 25px;
        }

       
    </style>


    <!-- favigon -->
    <link rel="shortcut icon" href="images/download.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.1-web/css/all.css">

</head>

<body>
   
    <div class="top-content">
        <h1 style="font-size:35px;color:white;;">Welcome to <strong>WEB</strong>chat, share your moments with friends!</h1>
        <p style="color:white;">Sign up and start sharing your photos and connect with your friends.
        </p>
        <hr style="width: 50%; color: white; margin-bottom:25px; margin-top:25px;">
    </div>

    <h1 style="color:white;">Get started</h1>

    <div class="wreper">
        
    <a href="signin.php" class="button">Sign In</a>
    <a href="signup.php" class="button button-signup">Sign Up</a>
    </div>
    <!-- Footer -->
    <footer>			
    	<div class="footer"> 
            <a style="text-decoration-line: none; color: #977AFF;" href="admin.php"><i class="fas fa-user-shield"></i> Admin? click here <i class="fas fa-arrow-right"></i></a>
    		<!-- <p style="color:#FFEBEB"><BR> Website designed and developed by <strong><U>Uttam Kumar & Omkar Mohanty</u></strong></p> -->
            
    	</div>
    </footer>

    <!-- <script>
        function log_pswd_toggale() {
            var x = document.getElementById("login_pswd");
            var img = document.getElementById("pswd_show");
            if (x.type === "password") {
                img.className = "fa-regular fa-eye-slash"
                x.type = "text";
            } else {
                img.className = "fa-regular fa-eye"
                x.type = "password";
            }
        }
        function reg_pswd_toggale() {
            var y = document.getElementById("register_pswd");
            var img = document.getElementById("reg_pswd_show");
            if (y.type === "password") {
                img.className = "fa-regular fa-eye-slash"
                y.type = "text";
            } else {
                img.className = "fa-regular fa-eye"
                y.type = "password";
            }
        }
        function reg_conf_pswd_toggale() {
            var z = document.getElementById("register_conferm_pswd");
            var img = document.getElementById("reg_conf_pswd_show");
            if (z.type === "password") {
                img.className = "fa-regular fa-eye-slash"
                z.type = "text";
            } else {
                img.className = "fa-regular fa-eye"
                z.type = "password";
            }
        }
    </script> -->

</body>

</html>