<?php
include "header.php";
include "home.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="asset/about.css">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-neutral-900 text-gray-200 font-serif " style="background-color: " id="about.php">
        <div class="flex flex-col md:flex-row w-full max-w-7xl shadow-xl rounded-lg overflow-hidden mx-4 md:mx-8">
            <section class="polygon-shape bg-neutral-900 p-12 flex flex-col justify-center md:w-2/3 md:max-w-[900px]">
            <p class="text-red-600  text-6px mb-2 tracking-wide select-none">Before you go on</p>
            <h1 class="text-5xl mb-8 font-semibold leading-tight select-none">About Us</h1>
            <p class="max-w-lg mb-12 text-700 font-size-6px tracking-wide select-none">
                At Rey Moto Parts, we’re committed to making motorcycle repair fast, reliable,
                 and hassle-free. Through our Online Motorcycle Repair Service Booking System,
                  riders can easily schedule services, and track repairs in real-time. With trusted technicians and transparent pricing, we aim to keep your motorcycle in top shape, safely and efficiently.
            </p>
            <button class="btn-outline-red rounded-md text-lg px-7 py-3 w-fit bg-transparent border border-red-600 cursor-pointer select-none">
                Explore more
            </button>
            </section>
            <!-- Right image with polygon shape complement -->
            <section class="md:w-2/3 relative">
            <img 
                src="asset/aboutbg.png" 
                alt="Vintage motorcycle being restored inside a garage workshop featuring wooden paneled walls and tools" 
                class="object-cover h-full w-full select-none" 
                
            img/>
            </section>
        </div>
    </div>
</body>
</html>