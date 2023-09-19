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

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user with the provided email exists in the database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Login successful
            $_SESSION['user_id'] = $row['user_id']; // You can store user data in the session
            header("Location: home.php"); // Redirect to the dashboard or another page
            exit();
        } else {
            $_SESSION['error_message'] = "Invalid password. Please try again.";
        }
    } else {
        $_SESSION['error_message'] = "Invalid email. User not found.";
    }

    // Close statements and the database connection
    $stmt->close();
    $conn->close();
}

// Redirect back to the login form with an error message (optional)
header("Location: index.php?loginError=1");
exit();
?>
