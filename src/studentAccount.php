<?php
session_start();
include("config/connection.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: auth/login.php");
    exit();
}

$studentId = $_SESSION['student_id'];

$syQuery = "SELECT SY FROM tblsy WHERE Status IN ('OPEN', 'CLOSED')";
$syResult = $conn->query($syQuery);

$lrnQuery = "SELECT LRN FROM tblstudents WHERE ID = ?";
$lrnStmt = $conn->prepare($lrnQuery);
$lrnStmt->bind_param("i", $studentId);
$lrnStmt->execute();
$lrnResult = $lrnStmt->get_result();
$studentLRN = $lrnResult->fetch_assoc();

$LRN = htmlspecialchars($studentLRN['LRN'] ?? 'No data');

$balanceQuery = "SELECT LRN, Balance FROM qrycollection WHERE LRN = ?";
$balanceStmt = $conn->prepare($balanceQuery);
$balanceStmt->bind_param("s", $LRN);
$balanceStmt->execute();
$balanceResult = $balanceStmt->get_result();
$studentBalance = $balanceResult->fetch_assoc();

$balance = htmlspecialchars($studentBalance['Balance'] ?? 'N/A');

$assessmentQuery = "SELECT TotalAssessment FROM qrycollection WHERE LRN = ?";
$assessmentStmt = $conn->prepare($assessmentQuery);
$assessmentStmt->bind_param("s", $LRN);
$assessmentStmt->execute();
$assessmentResult = $assessmentStmt->get_result();
$totalAssessment = $assessmentResult->fetch_assoc();

$totalAssessmentValue = htmlspecialchars($totalAssessment['TotalAssessment'] ?? 'N/A');

$nameQuery = "SELECT Firstname, Lastname FROM tblstudents WHERE ID = ?";
$nameStmt = $conn->prepare($nameQuery);
$nameStmt->bind_param("i", $studentId);
$nameStmt->execute();
$nameResult = $nameStmt->get_result();
$studentName = $nameResult->fetch_assoc();

$firstname = htmlspecialchars($studentName['Firstname'] ?? 'No data');
$lastname = htmlspecialchars($studentName['Lastname'] ?? 'No data');

$selectedYear = isset($_GET['year']) ? $_GET['year'] : '';

$paymentQuery = "SELECT SINo, PaymentFor, Amount, DatePayment FROM qrycollection WHERE LRN = ? AND SY = ?";
$paymentStmt = $conn->prepare($paymentQuery);
$paymentStmt->bind_param("ss", $LRN, $selectedYear);
$paymentStmt->execute();
$paymentResult = $paymentStmt->get_result();

$payments = [];
while ($row = $paymentResult->fetch_assoc()) {
    $payments[] = $row;
}

$assessmentQuery = "SELECT SY, LRN, Lastname, Firstname, StudType, GLevel, RegNo, TotalAssessment, RegFee, TuitionFee, MiscFee, LabFee, ClinicFee, DevelopmentalFee, OtherFees, InstFee, Discount, PaymentScheme, DateAssessed, Assessor, STATUS FROM qryassessment WHERE LRN = ?";
$assessmentStmt = $conn->prepare($assessmentQuery);
$assessmentStmt->bind_param("s", $LRN);
$assessmentStmt->execute();
$assessmentResult = $assessmentStmt->get_result();
$assessmentDetails = $assessmentResult->fetch_assoc();

$SY = htmlspecialchars($assessmentDetails['SY'] ?? 'No data');
$Lastname = htmlspecialchars($assessmentDetails['Lastname'] ?? 'No data');
$Firstname = htmlspecialchars($assessmentDetails['Firstname'] ?? 'No data');
$StudType = htmlspecialchars($assessmentDetails['StudType'] ?? 'No data');
$GLevel = htmlspecialchars($assessmentDetails['GLevel'] ?? 'No data');
$RegNo = htmlspecialchars($assessmentDetails['RegNo'] ?? 'No data');
$TotalAssessment = htmlspecialchars($assessmentDetails['TotalAssessment'] ?? 'No data');
$RegFee = htmlspecialchars($assessmentDetails['RegFee'] ?? 'No data');
$TuitionFee = htmlspecialchars($assessmentDetails['TuitionFee'] ?? 'No data');
$MiscFee = htmlspecialchars($assessmentDetails['MiscFee'] ?? 'No data');
$LabFee = htmlspecialchars($assessmentDetails['LabFee'] ?? 'No data');
$ClinicFee = htmlspecialchars($assessmentDetails['ClinicFee'] ?? 'No data');
$DevelopmentalFee = htmlspecialchars($assessmentDetails['DevelopmentalFee'] ?? 'No data');
$OtherFees = htmlspecialchars($assessmentDetails['OtherFees'] ?? 'No data');
$InstFee = htmlspecialchars($assessmentDetails['InstFee'] ?? 'No data');
$Discount = htmlspecialchars($assessmentDetails['Discount'] ?? 'No data');
$PaymentScheme = htmlspecialchars($assessmentDetails['PaymentScheme'] ?? 'No data');
$DateAssessed = htmlspecialchars($assessmentDetails['DateAssessed'] ?? 'No data');
$Assessor = htmlspecialchars($assessmentDetails['Assessor'] ?? 'No data');
$STATUS = htmlspecialchars($assessmentDetails['STATUS'] ?? 'No data');
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
                <div>
                    <?php include("components/studentAssessment.php") ?>
                </div>
            </section>
        </div>
    </div>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>