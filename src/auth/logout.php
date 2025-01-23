<?php
session_start();
include("../config/connection.php");
session_destroy();

// Redirect to the login page
header("Location: ../studentLoginForm.php");
exit();
?>