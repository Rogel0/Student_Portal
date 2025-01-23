<?php
session_start();
include("../config/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO tblstudents (Lastname, Firstname, Mi, username, email, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $lastname, $firstname, $middlename, $username, $email, $hashed_password);

    if ($stmt->execute()) {
        $_SESSION['register_success'] = 'Registration successful. Please log in.';
        header('Location: login.php');
    } else {
        $_SESSION['register_error'] = 'Registration failed. Please try again.';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>