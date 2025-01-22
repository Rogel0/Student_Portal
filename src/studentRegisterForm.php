<?php
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
    <title>Register</title>
</head>

<body>
    <?php include("./pages/header.php") ?>
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-spinner"></div>
    </div>
    <div class="flex items-center justify-center h-screen bg-gray-100 pt-7 relative z-10">
        <div class="bg-white p-8 rounded-lg h-auto shadow-lg w-full md:w-2/3 lg:w-3/4">
            <h1 class="text-2xl mb-2 mt-3 md:text-4xl font-bold text-center">Register</h1>
            <form id="regForm" action="./auth/register.php" method="POST" class="flex flex-col md:gap-2 md:pt-4">
                <div class="relative mb-4 z-0">
                    <input type="text" name="lastname" id="lastname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Last Name">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="lastnameIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="firstname" id="firstname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="First Name">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="firstnameIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="middlename" id="middlename" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Middle Name">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="middlenameIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="username" id="username" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Username">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="usernameIcon">
                        <svg fill="#81007E" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="email" name="email" id="email" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Email">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="emailIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="password" name="password" id="password" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Password">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="passwordIcon">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-gray-600">
                            <path d="M12 17c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <button type="submit" class="w-full bg-[#81007E] text-white py-2 md:py-5 md:text-lg rounded-lg hover:bg-purple-700 transition duration-200">Register</button>
                <p class="text-sm text-center pt-2 md:pt-6 md:text-lg">Already have an account? <span class="underline text-blue-500 hover:cursor-pointer"><a href="studentLoginForm.php">Login</a></span></p>
            </form>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/loginLoadingScript.js"></script>
<script src="script/preventDefault.js"></script>
</html>