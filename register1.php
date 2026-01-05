<?php
    $name = $_POST['user_name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['cpassword'];
    $address = $_POST['address'];

    $conn = new mysqli('localhost', 'root', '', 'dairyfarm');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO `user` (`user_name`, `mobile`, `cpassword`, `address`) VALUES ( '{$name}', '{$mobile}', '{$password}', '{$address}')");

        if ($stmt->execute() == true) {
            echo '<script>alert("Successfully added!");</script>';
            header("location: dash.php");
        } else {
            echo "Error: " . htmlspecialchars($stmt->error);
        }

        $stmt->close();
        $conn->close();
    }
?>