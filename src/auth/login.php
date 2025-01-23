<?php
session_start();
include("../config/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM tblstudents WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $stored_password = $user['password'];


        if (password_verify($password, $stored_password)) {
            $_SESSION['student_id'] = $user['ID'];
            header("Location: ../studentDashboard.php");
            exit();
        } else {
            $_SESSION['login_error'] = 'Invalid username or password.';
            header("Location: ../studentLoginForm.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = 'Invalid username or password.';
        header("Location: ../studentLoginForm.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>