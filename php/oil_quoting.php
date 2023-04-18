<?php
$servername = "localhost"; // replace with your server name
$username = "root"; // replace with your MySQL username
$password = ""; // replace with your MySQL password
$dbname = "client_communication"; // replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$type_of_oil = $_POST['type_of_oil'] ?? '';
$type_of_surface = $_POST['type_of_surface'] ?? '';
$size = $_POST['size'] ?? '';


// Insert data into database
$sql = "INSERT INTO oil_quoting_tickets (name, email, address, type_of_oil, type_of_surface, size) VALUES ('$name', '$email', '$address', '$type_of_oil','$type_of_surface','$size')";
$result = $conn->query($sql);

// Get the id of the last data last inserted
$ticket_id = mysqli_insert_id($conn);

// Echo results
if (!$result) {
    die('Invalid query: ' . mysqli_error($conn));
} else {
  echo "Thank you for submitting a ticket, your ticket ID is " . $ticket_id;
}

// Close connection
$conn->close();
?>
