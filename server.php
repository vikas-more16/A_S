<?php
session_start(); // Start the session

// Store form values in session variables
$_SESSION['Class'] = $_POST['Class'];
$_SESSION['Subject'] = $_POST['Subject'];
$_SESSION['Date'] = $_POST['date'];


header("Location: QR.html");
?>
