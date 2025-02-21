<?php
session_start();
include("config/connection.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: auth/login.php");
    exit();
}

$studentId = $_SESSION['student_id'];

// Fetch school years for the dropdown
$syQuery = "SELECT DISTINCT SY FROM tblsy ORDER BY SY DESC";
$syResult = $conn->query($syQuery);

// Get selected school year
$selectedSY = isset($_GET['sy']) ? $_GET['sy'] : '2022-2023';

// Fetch grades for the selected school year
$gradesQuery = "
    SELECT
        tblstudentgrades.LRN,
        tblsubjects.SubjectCode,
        tblsubjects.SubjDesc,
        tblsubjects.Units,
        tblstudentgrades.1Q,
        tblstudentgrades.2Q,
        tblstudentgrades.3Q,
        tblstudentgrades.4Q,
        tblstudentgrades.Average AS FinalGrade,
        tblstudentgrades.Remarks,
        tblsy.SY
    FROM
        tblstudentgrades
        LEFT JOIN tblsubjects ON tblstudentgrades.Subject_Code = tblsubjects.SubjectCode
        LEFT JOIN tblsy ON tblstudentgrades.SYID = tblsy.SYID
    WHERE
        tblstudentgrades.LRN = (SELECT LRN FROM tblstudents WHERE ID = ?)
        AND tblsy.SY = ?
";
$gradesStmt = $conn->prepare($gradesQuery);
$gradesStmt->bind_param("is", $studentId, $selectedSY);
$gradesStmt->execute();
$gradesResult = $gradesStmt->get_result();

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
    <div class="flex flex-grow w-full pt-6">
        <div class="md:pl-14">
        <?php include("components/studentSidebar.php") ?>
        </div>
        <div class="flex-grow pt-6 pl-3 pr-3 md:ml-64 md:flex md:justify-center md:pt-32">
            <section class="w-full  pt-12">
                <div>
                    <?php include("components/grades.php") ?>
                </div>  
            </section>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>