<?php
$servername = "localhost";
$username ="root";
$password = "";
$database = "beauty_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $database );

// Check connection
if ($conn->connect_error) {
    die("Connection failed".$conn->connect_error);
}
echo "";

// Perform database operations here (e.g., queries)
// $conn->close(); // Close the connection when done
?>