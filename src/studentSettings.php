<?php
session_start();
include("config/connection.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: studentLoginForm.php");
    exit();
}

$student_id = $_SESSION['student_id'];

$sql = "SELECT email FROM tblstudents WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();
$current_email = $student['email'];
$stmt->close();
$conn->close();
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
                    <?php  include("components/settings.php"); ?>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>