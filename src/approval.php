<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Approval</title>
    <link rel="stylesheet" href="../css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <?php include("./pages/header.php") ?>
    <div class="flex-grow flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-md mx-auto">
            <img src="images/approval.png" alt="Approval Pending" class="w-24 h-24 mx-auto mb-4">
            <h1 class="text-2xl font-bold mb-4">Account Approval</h1>
            <p class="text-lg mb-4">Your account is currently inactive. Please wait for account approval.</p>
            <a href="studentLoginForm.php" class="text-blue-500 underline">Back to Login</a>
        </div>
    </div>
    <script src="../script/mobileNav.js"></script>
    <script src="../script/preventDefault.js"></script>
    <script src="../script/loginLoadingScript.js"></script>
</body>
</html>