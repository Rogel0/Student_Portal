<?php
session_start();
include("../config/connection.php");


if (!isset($_SESSION['student_id'])) {
    header("Location: ../studentLoginForm.php");
    exit();
}

$student_id = $_SESSION['student_id'];


if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
    $picture = uniqid() . '-' . basename($_FILES['profile_picture']['name']);
    $target_dir = "../uploads/";
    $target_file = $target_dir . $picture;
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }
    move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file);

    $sql = "UPDATE tblstudents SET Picture = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $picture, $student_id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

header("Location: ../studentDashboard.php");
exit();
?>