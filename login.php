<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "root";  
$password = "";
$dbname = "dairyfarm";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$mobile = $_POST['mobile'];
$cpassword = $_POST['cpassword'];

// Prepare and execute query
$sql = "SELECT * FROM user WHERE mobile = ? AND cpassword = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $mobile, $cpassword);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login successful, redirect to dashboard
    $_SESSION['mobile'] = $mobile;
    header("Location: dash.php");
    exit();
} else {
    // Login failed, show error message
    echo "Login failed. Invalid mobile number or password.";
}

$stmt->close();
$conn->close();
?>
