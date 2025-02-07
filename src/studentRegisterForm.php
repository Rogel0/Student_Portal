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
    <title>Register</title>
</head>

<body>
    <?php include("./pages/header.php") ?>
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-spinner"></div>
    </div>
    <div class="flex items-center justify-center h-auto bg-gray-100 pt-7 relative z-10">
        <div class="bg-white p-8 rounded-lg h-auto shadow-lg w-full md:w-2/3 lg:w-3/4">
            <h1 class="text-2xl mb-2 mt-3 md:text-4xl font-bold text-center">Register</h1>
            <?php include("alerts/registered.php") ?>
            <form id="regForm" action="./auth/register.php" method="POST" class="flex flex-col md:gap-2 md:pt-4 overflow-auto">
                <h3 class="text-xl font-semibold mb-4">Account Information</h3>

                <div class="relative mb-4 z-0">
                    <input type="text" name="username" id="username" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Username" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="usernameIcon">
                        <svg fill="#81007E" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="email" name="email" id="email" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Email" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="emailIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="password" name="password" id="password" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Password" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="passwordIcon">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-gray-600">
                            <path d="M12 17c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-4">Personal Information</h3>
                <div class="relative mb-4 z-0">
                    <input type="text" name="lrn" id="lrn" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="LRN" pattern="\d*" title="Please enter only numbers" required oninput="this.setCustomValidity(''); if (!this.checkValidity()) this.setCustomValidity('Please enter only numbers');">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="lastname" id="lastname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Last Name" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="lastnameIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="firstname" id="firstname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="First Name" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="firstnameIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="middlename" id="middlename" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Middle Name" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none" id="middlenameIcon">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>

                <div class="relative mb-4 z-0">
                    <input type="date" name="dob" id="dob" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Date of Birth" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2z"></path>
                        </svg>
                    </div>
                </div>

                <div class="relative mb-4 z-0">
                    <input type="number" name="age" id="age" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Age" min="1" max="120" title="Please enter a valid age between 1 and 120" required oninput="this.setCustomValidity(''); if (!this.checkValidity()) this.setCustomValidity('Please enter a valid age between 1 and 120');">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-13h-2v6h6v-2h-4z"></path>
                        </svg>
                    </div>
                </div>

                <div class="relative mb-4 z-0">
                    <input type="text" name="pob" id="pob" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Place of Birth" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <select name="gender" id="gender" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                        <option>Choose gender..</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2C9.24 2 7 4.24 7 7s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 8c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm-6 8c0-2.67 5.33-4 8-4s8 1.33 8 4v2H6v-2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="street" id="street" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Street Name and House Number" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2L2 7v15h20V7L12 2zm0 2.18l7 3.82v11H5v-11l7-3.82zM7 10v2h2v-2H7zm0 4v2h2v-2H7zm4-4v2h2v-2h-2zm0 4v2h2v-2h-2zm4-4v2h2v-2h-2zm0 4v2h2v-2h-2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="city" id="city" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="City" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="barangay" id="barangay" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Barangay" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"></path>
                        </svg>
                    </div>
                </div>

                <h3 class="text-xl font-semibold mb-4">Father's Information</h3>
                <div class="relative mb-4 z-0">
                    <input type="text" name="father_lastname" id="father_lastname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Father's Last Name" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="father_firstname" id="father_firstname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Father's First Name" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="father_occupation" id="father_occupation" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Father's Occupation" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="father_contact" id="father_contact" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Father's Contact" pattern="\d{10,15}" title="Please enter a valid contact number (10-15 digits)" required oninput="this.setCustomValidity(''); if (!this.checkValidity()) this.setCustomValidity('Please enter a valid contact number (10-15 digits)');">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.75-.03-1.02.24l-2.2 2.2c-3.12-1.61-5.61-4.1-7.22-7.22l2.2-2.2c.27-.27.35-.67.24-1.02C8.7 6.45 8.5 5.25 8.5 4 8.5 3.45 8.05 3 7.5 3h-5C2.45 3 2 3.45 2 4c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-5c0-.55-.45-1-1-1z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="email" name="father_email" id="father_email" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Father's Email (Optional)">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
                        </svg>
                    </div>
                </div>

                <h3 class="text-xl font-semibold mb-4">Mother's Information</h3>
                <div class="relative mb-4 z-0">
                    <input type="text" name="mother_lastname" id="mother_lastname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Mother's Last Name" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="mother_firstname" id="mother_firstname" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Mother's First Name" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="mother_occupation" id="mother_occupation" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Mother's Occupation" required>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="text" name="mother_contact" id="mother_contact" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Mother's Contact" pattern="\d{10,15}" title="Please enter a valid contact number (10-15 digits)" required oninput="this.setCustomValidity(''); if (!this.checkValidity()) this.setCustomValidity('Please enter a valid contact number (10-15 digits)');">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57-.35-.11-.75-.03-1.02.24l-2.2 2.2c-3.12-1.61-5.61-4.1-7.22-7.22l2.2-2.2c.27-.27.35-.67.24-1.02C8.7 6.45 8.5 5.25 8.5 4 8.5 3.45 8.05 3 7.5 3h-5C2.45 3 2 3.45 2 4c0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-5c0-.55-.45-1-1-1z"></path>
                        </svg>
                    </div>
                </div>
                <div class="relative mb-4 z-0">
                    <input type="email" name="mother_email" id="mother_email" class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Mother's Email (Optional)">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="#81007E" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5">
                            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
                        </svg>
                    </div>
                </div>
                <!-- <button type="submit" class="w-full bg-[#81007E] text-white py-2 md:py-5 md:text-lg rounded-lg hover:bg-purple-700 transition duration-200">Register</button>
                <p class="text-sm text-center pt-2 md:pt-6 md:text-lg">Already have an account? <span class="underline text-blue-500 hover:cursor-pointer"><a href="studentLoginForm.php">Login</a></span></p> -->
                <button type="button" class="w-full bg-[#81007E] text-white py-2 md:py-5 md:text-lg rounded-lg hover:bg-purple-700 transition duration-200" onclick="showTermsModal()">Continue</button>
                <p class="text-sm text-center pt-2 md:pt-6 md:text-lg">Already have an account? <span class="underline text-blue-500 hover:cursor-pointer"><a href="studentLoginForm.php">Login</a></span></p>
            </form>
            <?php include("components/termsModal.php"); ?>
            </form>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/loginLoadingScript.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/autoAge.js"></script>
<script src="script/termsModal.js"></script>

</html>