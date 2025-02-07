<?php
session_start();
include("config/connection.php");

// Check if the session variable is set
if (!isset($_SESSION['LRN'])) {
    // Redirect to login page or show an error message
    header("Location: auth/login.php");
    exit();
}

// Assuming you have a session variable storing the student's LRN
$studentId = $_SESSION['LRN'];

// Fetch student's name
$nameQuery = "SELECT Firstname, Lastname FROM tblstudents WHERE LRN = ?";
$nameStmt = $conn->prepare($nameQuery);
$nameStmt->bind_param("s", $studentId);
$nameStmt->execute();
$nameResult = $nameStmt->get_result();
$studentName = $nameResult->fetch_assoc();

// Fetch subjects filtered by LRN
$sql = "SELECT SubjectCode, SubjDesc FROM qrysubject WHERE LRN = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $studentId);
$stmt->execute();
$result = $stmt->get_result();
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
    $firstname = htmlspecialchars($studentName['Firstname']);
    $lastname = htmlspecialchars($studentName['Lastname']);
    include("components/studentHeaderComponent.php");
    ?>
    <div class="flex flex-grow w-full p-6">
        <div class="md:pl-14">
        <?php include("components/studentSidebar.php") ?>
        </div>
        <div class="flex-grow p-6 md:ml-64 md:flex md:justify-center md:pt-32">
            <section class="w-full max-w-4xl pt-12">
                <div>
                    <?php  include("components/currentSubjects.php"); ?>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>