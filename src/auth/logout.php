<?php
session_start();
include("../config/connection.php");

// Log the logout activity
if (isset($_SESSION['LRN'])) {
    $activity = "Logout";
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $logQuery = "INSERT INTO tblWebLogs (LRN, Activity, Date, Time) VALUES (?, ?, ?, ?)";
    $logStmt = $conn->prepare($logQuery);
    $logStmt->bind_param("ssss", $_SESSION['LRN'], $activity, $date, $time);
    $logStmt->execute();
}

session_destroy();

// Redirect to the login page
header("Location: ../studentLoginForm.php");
exit();
?>