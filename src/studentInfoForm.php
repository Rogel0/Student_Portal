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
    <title>Student Info Form</title>
</head>

<body>
    <?php include("components/studentHeaderComponent.php") ?>
    <section class="mx-auto pt-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <div>
                <h2 class="text-2xl font-bold mb-4">Student Information Form</h2>
                <hr class="mb-6">

                <!-- Display success or error messages -->
              <?php include("alerts/studentInfoForm.php") ?>
                <form action="submit/submit_Info.php" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <label for="picture" class="mb-2 font-semibold">Picture</label>
                            <input type="file" name="picture" id="picture" class="border-2 border-gray-300 w-full h-auto text-sm p-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="lastname" class="mb-2 font-semibold">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="firstname" class="mb-2 font-semibold">First Name</label>
                            <input type="text" name="firstname" id="firstname" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="middlename" class="mb-2 font-semibold">Middle Name</label>
                            <input type="text" name="middlename" id="middlename" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="lrn" class="mb-2 font-semibold">LRN</label>
                            <input type="text" name="lrn" id="lrn" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="age" class="mb-2 font-semibold">Age</label>
                            <input type="number" name="age" id="age" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                        </div>
                        <div class="flex flex-col">
                            <label for="sex" class="mb-2 font-semibold">Sex</label>
                            <select name="sex" id="sex" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="birthday" class="mb-2 font-semibold">Birthday</label>
                            <input type="date" name="birthday" id="birthday" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                        </div>
                        <div class="flex flex-col md:col-span-2">
                            <label for="address" class="mb-2 font-semibold">Address</label>
                            <input type="text" name="address" id="address" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="bg-[#81007E] text-white py-2 px-10 w-full rounded-lg hover:bg-purple-700 transition duration-200">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>

</html>