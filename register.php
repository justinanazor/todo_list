<?php
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "TeruToDo";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $raw_password = $_POST['password'];

    // Hash the password
    $password = password_hash($raw_password, PASSWORD_DEFAULT);

    // Check if the email already exists in the database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists, store an error message in a session variable
        $_SESSION['error_message'] = "Email already exists. Please choose a different email.";
    } else {
        // Email is unique, insert the user into the database with registration date
        $registrationDate = date("Y-m-d H:i:s"); // Get the current date and time
        $insert_sql = "INSERT INTO users (username, email, password, registration_date) VALUES (?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("ssss", $username, $email, $password, $registrationDate);

        if ($insert_stmt->execute()) {
            // Registration successful, redirect to "index.php" with a success query parameter
            header("Location: index.php?registrationSuccess=1");
            exit(); // Make sure to exit to prevent further execution
        } else {
            $_SESSION['error_message'] = "Registration failed. Please try again.";
        }
    }

    // Close statements and the database connection
    $stmt->close();
    $insert_stmt->close();
    $conn->close();
}

// Redirect back to the index page if registration failed or wasn't attempted
header("Location: index.php");
exit();
?>
