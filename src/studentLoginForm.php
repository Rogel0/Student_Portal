<?php
session_start();
include("config/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/loadingScreen.css">
    <title>Login</title>
</head>

<body>
    <?php include("./pages/header.php") ?>
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-spinner"></div>
    </div>

    <div class="flex items-center justify-center h-screen bg-gray-100 pt-7 relative z-10">
        <div class="bg-white p-8 rounded-lg h-auto shadow-lg w-full md:w-2/3 lg:w-3/4">
            <div class="text-center mb-6 md:pt-12">
                <img src="images/graduation.png" alt="graduation" class="w-10 h-10 mx-auto mt-[-20px] md:h-14 md:w-14">
                <h3 class="text-lg md:text-4xl font-bold text-[#81007E] md:pt-10">TOP VILLE INTEGRATED SCHOOL INC.</h3>
                <p class="text-gray-600 text-xs font-bold md:text-sm">Saint Joseph Village 9, Laggam, San Pedro Laguna</p>
                <h1 class="text-2xl md:text-4xl font-bold mt-4">Login Form</h1>
            </div>
            <form id="regForm" action="./auth/login.php" method="POST" class="flex flex-col md:gap-8 md:pt-12">
                <div class="relative mb-4 z-0">
                    <input type="text" name="username" id="username" class="w-full pl-10 pr-4 md:pl-20 py-2 md:py-6 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Username">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 md:pl-6 pointer-events-none" id="usernameIcon">
                        <svg fill="#81007E" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-10 md:w-10">
                            <path d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0 md:mb-16 flex">
                    <input type="password" name="password" id="password" class="w-full pl-10 md:pl-20 pr-4 py-2 md:py-6 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Password">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 md:pl-6 pointer-events-none" id="passwordIcon">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 md:h-10 md:w-10 text-gray-600">
                            <path d="M7 10.0288C7.47142 10 8.05259 10 8.8 10H15.2C15.9474 10 16.5286 10 17 10.0288M7 10.0288C6.41168 10.0647 5.99429 10.1455 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C18.0057 10.1455 17.5883 10.0647 17 10.0288M7 10.0288V8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8V10.0288" stroke="#81007E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
                <button type="submit" class="w-full bg-[#81007E] text-white py-2 md:py-5 md:text-lg rounded-lg hover:bg-purple-700 transition duration-200">Login</button>
            </form>
            <p class="text-sm text-center pt-2 md:pt-6 md:text-lg">Don't have account? <span class="underline text-blue-500 hover:cursor-pointer"><a href="studentRegisterForm.php">Register</a></span></p>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>

</html>