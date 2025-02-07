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

        // Trim any whitespace from the stored password
        $stored_password = trim($stored_password);

        if ($password === $stored_password) {
            // Set the session variables
            $_SESSION['student_id'] = $user['ID'];
            $_SESSION['LRN'] = $user['LRN']; // Assuming LRN is a column in tblstudents

            // Redirect to the dashboard
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
}
?>