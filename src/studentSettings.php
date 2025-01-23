<?php
session_start();
include("config/connection.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: studentLoginForm.php");
    exit();
}

$student_id = $_SESSION['student_id'];

$sql = "SELECT email FROM tblstudents WHERE ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();
$current_email = $student['email'];
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/loadingScreen.css">
    <title>Settings</title>
</head>
<body>
    <?php include("components/studentHeaderComponent.php") ?>
    <section class="mx-auto pt-12">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <div>
                <h2 class="text-2xl font-bold mb-4">Settings</h2>
                <hr class="mb-6">

              <?php include("alerts/email_pass.php") ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Form for changing email -->
                    <div class="flex flex-col md:col-span-2">
                        <h3 class="text-xl font-semibold mb-4">Change Email</h3>
                        <form action="submit/change_email.php" method="POST">
                            <div class="flex flex-col mb-4">
                                <label for="current_email" class="mb-2 font-semibold">Current Email</label>
                                <input type="email" name="current_email" id="current_email" value="<?php echo $current_email; ?>" class="border-2 border-gray-300 w-full h-10 text-sm p-2 bg-gray-100 cursor-not-allowed" readonly disabled>
                            </div>
                            <div class="flex flex-col mb-4">
                                <label for="new_email" class="mb-2 font-semibold">New Email</label>
                                <input type="email" name="new_email" id="new_email" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                            </div>
                            <button type="submit" class="w-full h-12 bg-[#81007E] text-white font-semibold rounded-lg hover:bg-purple-700 transition duration-200">Save Email</button>
                        </form>
                    </div>
                    <div class="flex flex-col md:col-span-2 mt-8">
                        <h3 class="text-xl font-semibold mb-4">Change Password</h3>
                        <form action="submit/change_password.php" method="POST">
                            <div class="flex flex-col mb-4">
                                <label for="password" class="mb-2 font-semibold">New Password</label>
                                <input type="password" name="password" id="password" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                            </div>
                            <div class="flex flex-col mb-4">
                                <label for="confirm_password" class="mb-2 font-semibold">Confirm New Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="border-2 border-gray-300 w-full h-10 text-sm p-2">
                            </div>
                            <button type="submit" class="w-full h-12 bg-[#81007E] text-white font-semibold rounded-lg hover:bg-purple-700 transition duration-200">Save Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="script/mobileNav.js"></script>
<script src="script/preventDefault.js"></script>
<script src="script/loginLoadingScript.js"></script>
</html>