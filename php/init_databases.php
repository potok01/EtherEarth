<?php
// Database connection information
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it does not exist
$dbname = "client_communication";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    error_log("Database created successfully");
} else {
    error_log("Error creating database: " . $conn->error);
}

// Create table if it does not exist
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS support_tickets (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    issue VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    error_log("Table created successfully");
} else {
    error_log("Error creating table: " . $conn->error);
}

// Create table if it does not exist
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS oil_quoting_tickets (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    type_of_oil VARCHAR(255) NOT NULL,
    type_of_surface VARCHAR(255) NOT NULL,
    size VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    error_log("Table created successfully");
} else {
    error_log("Error creating table: " . $conn->error);
}

// Create table if it does not exist
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS solar_quoting_tickets (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    type_of_panels VARCHAR(255) NOT NULL,
    type_of_inverters VARCHAR(255) NOT NULL,
    energy_usage VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    error_log("Table created successfully");
} 
else {
    error_log("Error creating table: " . $conn->error);
}


// Close connection
$conn->close();
?>
