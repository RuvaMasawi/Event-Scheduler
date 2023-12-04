<?php
// Retrieve event details from form submission
$eventTitle = $_POST['event-title'];
$eventDate = $_POST['event-date'];
$eventTime = $_POST['event-time'];

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_scheduler";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";


// Insert event into database
$sql = "INSERT INTO events (title, date, time) VALUES ('$eventTitle', '$eventDate', '$eventTime')";
$conn->query($sql);

// Close database connection
$conn->close();

// Redirect back to the main page
header("Location: index.html");
exit();
?>
