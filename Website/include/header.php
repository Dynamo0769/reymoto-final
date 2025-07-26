
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="asset/about.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <img src="asset/logo.png" alt="ReyMoto Logo" class="logo-img">
            </div>
            <div class="nav">
                <a href="webpage.php" class="nav-link">Home</a>
                <a href="about.php" class="nav-link">About</a>
                
                <a href="shop.php" class="nav-link">Features</a>
                <a href="features.php" class="nav-link">Features</a>
                <a href="contact.php" class="nav-link">Contact</a>
                
            </div>
            <div>
                <button class="help-button" link="Authintacation/sign_up.php">
                    Sign-up
                </button>
            </div>
        </div>
    </header>

    

    <style>

        .help-button {
    background-color:transparent;
    color: white;
    border:2px solid red;
    padding: 0.4em 0.9em;
  border-radius: 1.9em;
    cursor: pointer;
    text-decoration: none;
    
            
    font-size: 1.1rm;
}

.help-button:hover {
    color:red;
    text-decoration: none;
}

        
        /* Header */
.header {
    background-color: black;
    color: #1E1E1E;
    padding: 1rem 0;
    position: fixed;
    top: 0; 
    left: 0; 
    width: 100%; 
    z-index: 1000; 
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 100%;
    max-height: 50px;
    margin: 0 auto;
    padding: 0 1rem;
}

.logo-img {
    height: 80px;
    margin-top: 7px;
}

/* Basic Nav Styling */
.nav {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 10px;
    
}

.nav-link {
    color: white;
    text-decoration: gray;
    font-size: 1.1rem;
    font-weight: 500;
    padding: 10px 15px;
    position: relative;
    transition: color 0.3s ease;
}

/* Hover Effect */
.nav-link:hover {
    color: #ff6347;
    text-decoration: none;
}

/* Tooltip-like Hover Text */
.nav-link::after {
    content: attr(data-hover);
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background-color: #a11313;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 0.9rem;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.nav-link:hover::after {
    opacity: 1;
    visibility: visible;
}


strong {
    color: #000000; /* Black color for the strong text */
}

a .nav-link {
    color: #000000; /* Black color for links */
    text-decoration: none;
}

a .nav-link:hover {
    text-decoration: underline; /* Underline on hover */
}

    </style>

    
</body>
</html>


