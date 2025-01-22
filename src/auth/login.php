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

        if (password_needs_rehash($stored_password, PASSWORD_DEFAULT)) {
            $hashed_password = password_hash($stored_password, PASSWORD_DEFAULT);
            $update_sql = "UPDATE tblstudents SET password = ? WHERE username = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ss", $hashed_password, $username);
            $update_stmt->execute();
            $stored_password = $hashed_password;
        }


        if (password_verify($password, $stored_password)) {
            $_SESSION['username'] = $username;
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