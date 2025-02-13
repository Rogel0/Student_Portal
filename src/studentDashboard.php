<?php
session_start();
include("config/connection.php");

// Check if the session variable is set
if (!isset($_SESSION['LRN'])) {
    // Redirect to login page or show an error message
    header("Location: auth/login.php");
    exit();
}


$studentId = $_SESSION['LRN'];


$nameQuery = "SELECT Firstname, Lastname FROM tblstudents WHERE LRN = ?";
$nameStmt = $conn->prepare($nameQuery);
$nameStmt->bind_param("s", $studentId);
$nameStmt->execute();
$nameResult = $nameStmt->get_result();
$studentName = $nameResult->fetch_assoc();


$syQuery = "SELECT SY FROM tblsy WHERE Status IN ('OPEN', 'CLOSED')";
$syResult = $conn->query($syQuery);


$selectedYear = isset($_GET['year']) ? $_GET['year'] : '';
$subjectQuery = "SELECT SubjectCode, SubjDesc, EmployeeNo FROM qrysubjects WHERE SY = ? AND LRN = ?";
$stmt = $conn->prepare($subjectQuery);
$stmt->bind_param("ss", $selectedYear, $studentId);
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
        <div class="flex-grow pt-2 md:ml-64 md:flex md:justify-center md:pt-32">
            <section class="w-full max-w-4xl pt-12">
                    <?php  include("components/currentSubjects.php"); ?>
            </section>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>