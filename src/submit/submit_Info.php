<?php
session_start();
include("../config/connection.php");

// Check if the student ID is set in the session
if (!isset($_SESSION['student_id'])) {
    header("Location: ../studentLoginForm.php");
    exit();
}

$student_id = $_SESSION['student_id'];

// Retrieve form data
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];

// Handle file upload
if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
    $picture = uniqid() . '-' . basename($_FILES['picture']['name']);
    $target_dir = "../uploads/";
    $target_file = $target_dir . $picture;
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }
    move_uploaded_file($_FILES['picture']['tmp_name'], $target_file);
} else {
    $picture = null;
}

// Update student details in the database
$sql = "UPDATE tblstudents SET Lastname = ?, Firstname = ?, Mi = ?, Age = ?, Gender = ?, Bdate = ?, Address = ?, Picture = ? WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssissssi", $lastname, $firstname, $middlename, $age, $sex, $birthday, $address, $picture, $student_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $_SESSION['info_success'] = "Student information updated successfully.";
} else {
    $_SESSION['info_error'] = "Failed to update student information.";
}

$stmt->close();
$conn->close();

header("Location: ../studentInfoForm.php");
exit();
?>