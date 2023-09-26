<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a database named "terutodo" if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS terutodo";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Switch to the newly created database
$dbname = "terutodo";
$conn = new mysqli($servername, $username, $password, $dbname);

// Create a "users" table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(100) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(100) NOT NULL,
    `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully<br>";
    header("Location: index.php");
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close the database connection
$conn->close();
?>
