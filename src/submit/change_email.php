<?php
session_start();
include("../config/connection.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: ../studentLoginForm.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_SESSION['student_id'];
    $new_email = $_POST['new_email'];


    if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email_error'] = 'Invalid email format.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }


    $sql_check = "SELECT ID FROM tblstudents WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $new_email);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        $_SESSION['email_error'] = 'Email is already in use.';
        $stmt_check->close();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
    $stmt_check->close();


    $sql = "UPDATE tblstudents SET email = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $new_email, $student_id);

    if ($stmt->execute()) {
        $_SESSION['email_success'] = 'Email changed successfully.';
        header('Location: ../studentSettings.php');
    } else {
        $_SESSION['email_error'] = 'Failed to change email. Please try again.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>