<?php
session_start(); // ✅ Start the session at the top

include "markAttendance.html"; // Include HTML after session_start()

// Retrieve session variables
$serverName = "localhost";
$userName = "root";
$password = "";
$DATABASE = $_SESSION['Class']; // Use session variable
$SUBJECT = $_SESSION['Subject'];
$DATE = $_SESSION['Date'];

// Get the roll number from the form
$roll = $_POST['roll-no']; // Avoid errors if 'roll-no' is not set

// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $DATABASE);

if (!$conn) {
    die("Sorry, connection failed: " . mysqli_connect_error());
} 

// Correct SQL query
$sql = "INSERT INTO `ai` (`subject_name`, `entry_date`,`num_$roll`) VALUES ('$SUBJECT','$DATE','$roll')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Attendance marked successfully for Roll No: $roll";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>

