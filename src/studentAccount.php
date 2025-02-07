<?php
session_start();
include("config/connection.php");


if (!isset($_SESSION['student_id'])) {
    header("Location: auth/login.php");
    exit();
}

$studentId = $_SESSION['student_id'];

error_log("Student ID: " . $studentId);

$lrnQuery = "SELECT LRN FROM tblstudents WHERE ID = ?";
$lrnStmt = $conn->prepare($lrnQuery);
$lrnStmt->bind_param("i", $studentId);
$lrnStmt->execute();
$lrnResult = $lrnStmt->get_result();
$studentLRN = $lrnResult->fetch_assoc();

error_log("Student LRN: " . print_r($studentLRN, true));

$LRN = htmlspecialchars($studentLRN['LRN'] ?? 'No data');

$balanceQuery = "SELECT LRN, Balance FROM qrycollection WHERE LRN = ?";
$balanceStmt = $conn->prepare($balanceQuery);
$balanceStmt->bind_param("s", $LRN);
$balanceStmt->execute();
$balanceResult = $balanceStmt->get_result();
$studentBalance = $balanceResult->fetch_assoc();

error_log("Student Balance: " . print_r($studentBalance, true));

$balance = htmlspecialchars($studentBalance['Balance'] ?? 'N/A');

$assessmentQuery = "SELECT TotalAssessment FROM qrycollection WHERE LRN = ?";
$assessmentStmt = $conn->prepare($assessmentQuery);
$assessmentStmt->bind_param("s", $LRN);
$assessmentStmt->execute();
$assessmentResult = $assessmentStmt->get_result();
$totalAssessment = $assessmentResult->fetch_assoc();

error_log("Total Assessment: " . print_r($totalAssessment, true));

$totalAssessmentValue = htmlspecialchars($totalAssessment['TotalAssessment'] ?? 'N/A');


$nameQuery = "SELECT Firstname, Lastname FROM tblstudents WHERE ID = ?";
$nameStmt = $conn->prepare($nameQuery);
$nameStmt->bind_param("i", $studentId);
$nameStmt->execute();
$nameResult = $nameStmt->get_result();
$studentName = $nameResult->fetch_assoc();

error_log("Student Name: " . print_r($studentName, true));

$firstname = htmlspecialchars($studentName['Firstname'] ?? 'No data');
$lastname = htmlspecialchars($studentName['Lastname'] ?? 'No data');

$paymentQuery = "SELECT PaymentFor, Amount, DatePayment FROM qrycollection WHERE LRN = ?";
$paymentStmt = $conn->prepare($paymentQuery);
$paymentStmt->bind_param("s", $LRN);
$paymentStmt->execute();
$paymentResult = $paymentStmt->get_result();

$payments = [];
while ($row = $paymentResult->fetch_assoc()) {
    $payments[] = $row;
}

error_log("Payments: " . print_r($payments, true));
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
                    <?php  include("components/studentAccount.php"); ?>
                </div>
                <div>
                    <?php include("components/paymentHistory.php"); ?>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>