<?php
session_start();
include("../config/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $lrn = $_POST['lrn'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $gender = $_POST['gender'];
    $address = $_POST['street'];
    $city = $_POST['city'];
    $barangay = $_POST['barangay'];
    $status = 'Inactive'; 
    $date_registered = date('Y-m-d'); 

    $sql = "INSERT INTO tblstudents (username, email, password, LRN, Lastname, Firstname, Mi, Age, Bdate, Birthplace, Gender, Address, Brgy, City, DateRegistered, Status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssss", $username, $email, $password, $lrn, $lastname, $firstname, $middlename, $age, $dob, $pob, $gender, $address, $barangay, $city, $date_registered, $status);

    if ($stmt->execute()) {
        $_SESSION['register_success'] = 'Registration successful. Please log in.';
        header('Location: ../studentRegisterForm.php');
    } else {
        $_SESSION['register_error'] = 'Registration failed. Please try again.';
        header('Location: ../studentRegisterForm.php');
    }

    $stmt->close();
    $conn->close();
    exit();
}
?>