<?php
session_start();
include("config/connection.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: auth/login.php");
    exit();
}

$studentId = $_SESSION['student_id'];

$profileQuery = "SELECT LRN, Lastname, Firstname, username, email, Mi, StudType, Bdate, Age, Birthplace, Gender, Address, Brgy, City, DateRegistered, Status, Picture FROM tblstudents WHERE ID = ?";
$profileStmt = $conn->prepare($profileQuery);
$profileStmt->bind_param("i", $studentId);
$profileStmt->execute();
$profileResult = $profileStmt->get_result();
$studentProfile = $profileResult->fetch_assoc();

$defaultImage = "images/blank_profile.png";
$profileImage = !empty($studentProfile['Picture']) ? htmlspecialchars($studentProfile['Picture']) : $defaultImage;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/loadingScreen.css">
    <title>Dashboard</title>
</head>
<body class="flex flex-col h-screen">
    <?php
    include("components/studentHeaderComponent.php");
    ?>
    <div class="flex flex-grow w-full p-6">
        <div class="md:pl-14">
        <?php include("components/studentSidebar.php") ?>
        </div>
        <div class="flex-grow pt-2 md:ml-64 md:flex md:justify-center md:pt-32">
            <section class="w-full max-w-4xl pt-12">
                <?php include("components/profile.php") ?>
            </section>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>