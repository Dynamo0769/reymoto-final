<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro:wght@400&display=swap" rel="stylesheet">
</head>
    <style>
        .social-icons {
            justify-content: center; /* Center the icons */
        }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            
            
            text-decoration: none; /* Remove underline */
            transition: background-color 0.3s, transform 0.3s; /* Transition effects */
        }

        .icon:hover {
            
            transform: scale(1.1); /* Slightly enlarge on hover */
        }

        .icon i {
            font-size: 24px; /* Icon size */
        }
        

    </style>
<body>
    <footer style="background-color: #333; color: #fff; padding: 20px; text-align: left; max-width: 1500px;  font-family: SF Pro, sans-serif; margin-left:-5px; ">
    <div style="display: flex; justify-content: space-between; max-width: 1200px; margin: auto; margin-right: 57px; margin-left: 120px;">
        <div>
            <h3 style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 1; margin: button 10px;">Navigation</h3>
            <ul style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 79.84%; margin-top: 10px">
                <li><a href="http://localhost/Website/webpage.php" style="color: #fff; text-decoration: none;">Home</a></li>
                <li><a href="about.php" style="color: #fff; text-decoration: none;">About Us</a></li>
                <li><a href="events.php" style="color: #fff; text-decoration: none;">Services</a></li>
                <li><a href="blog.php" style="color: #fff; text-decoration: none;">Features</a></li>
                <li><a href="blog.php" style="color: #fff; text-decoration: none;">Contact</a></li>
            </ul>
        </div>

        <div>
            <h3 style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 1; margin: button 10px;">About</h3>
            <ul style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 79.84%; margin-top: 10px">
                <li><a href="events.php" style="color: #fff; text-decoration: none;">Goal</a></li>
                <li><a href="blog.php" style="color: #fff; text-decoration: none;">Mission</a></li>
                <li><a href="blog.php" style="color: #fff; text-decoration: none;">Vision</a></li>
        </div>

        <div>
            <h3 style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 1; margin-button: 10px;">Features</h3>
            <ul style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 79.84%; margin-top: 10px">
                <li><a href="#" style="color: #fff;">Online Booking System</a></li>
                <li><a href="#" style="color: #fff;">online Inventory</a></li>
                <li><a href="#" style="color: #fff;">Service History</a></li>
                <li><a href="#" style="color: #fff;">Service Tracking</a></li>
            </ul>
        </div>

        <div>
            <h3 style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 1; margin: button 10px;">Communicate to Us</h3>
            <ul style="font-weight: bold; font-size: 15px; color: white; font-family: 'SF Pro', sans-serif; opacity: 79.84%; margin-top: 10px">
                <li><a href="contact.php" style="color: #fff;">reynaldo@gmail.com</a></li>
                <li>0322541929</li>
                <li><a href="mailto:salesdept.vmgroup@gmail.com" style="color: #fff;">Contact Us</a></li>
                <li><a href="contact.php" style="color: #fff;">Facebook</a></li>
                <li><a href="contact.php" style="color: #fff;">Messenger</a></li>
            </ul>
        </div>
    </div>

    <hr style="border: 1px solid #555; margin-right: 120px; margin-left: 118px; margin-top: 28px;">

    <div style="text-align: center; margin-top: 20px; display: flex; flex-direction: row; align-items: center; justify-content: space-around; gap: 10px; background-color: black; padding: 10px; margin-right: -20px; margin-left: -28px; margin-bottom: -20px;">
        <img src="asset/logo.png" alt="logo" style="width: 50px; height: 50px;">
        <p>© 2025 ReyMotoParts. All Rights Reserved.</p>
        <p class="social-icons" style="display: flex; gap: 10px;">
            <a href="https://www.facebook.com" target="_blank" class="icon">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.messenger.com" target="_blank" class="icon">
                <i class="fab fa-facebook-messenger"></i>
            </a>
            <a href="https://mail.google.com" target="_blank" class="icon">
                <i class="fab fa-google"></i>
            </a>
        </p>
    </div>
</footer>

    
</body>
</html>