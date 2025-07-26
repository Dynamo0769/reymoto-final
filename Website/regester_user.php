<?php
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ReyMoto</title>
    <link rel="stylesheet" href="ogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="auth-page">

    <div class="auth-wrapper">
        
            <div class="auth-box new-auth-box" style="margin-left: 50px;">
                <a href="index.html"><img src="asset/logo.png" alt="Reymoto Logo" class="logo"></a>
                <h3 style="margin-left: -50px;">Register with ReyMotoParts</h3>
                <p class="subtitle" style="margin-left: -50px;">Reserve the Parts You Need, Pick Up When You're Ready.</p>
                <form id="login-form">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required placeholder="your.email@example.com">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn-primary">Login</button>
                </form>
                <p class="auth-switch">Don't have an account? <a href="register.html">Sign up</a></p>
            </div>
        <div class="auth-image-side" style="background-image: url('asset/bgregester.png'); max-width: 100%; height: 90vh; background-size: cover; background-position: left;">
            </div>
        <div class="auth-form-side">  
        
    </div>

    <div class="popup" id="success-popup"><p>✅ Registration successful! Please login.</p></div>
    <div class="popup" id="error-popup"><p>❌ Authentication failed!</p></div>

    <script src="script.js"></script>
</body>
</html>