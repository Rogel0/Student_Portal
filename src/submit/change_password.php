<?php
session_start();
include("../config/connection.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: ../studentLoginForm.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_SESSION['student_id'];
    $new_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if ($new_password !== $confirm_password) {
        $_SESSION['password_error'] = 'Passwords do not match.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }

    if (strlen($new_password) < 8) {
        $_SESSION['password_error'] = 'Password must be at least 8 characters long.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }


    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);


    $sql = "UPDATE tblstudents SET password = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $hashed_password, $student_id);

    if ($stmt->execute()) {
        $_SESSION['password_success'] = 'Password changed successfully.';
        header('Location: ../studentSettings.php');
    } else {
        $_SESSION['password_error'] = 'Failed to change password. Please try again.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>