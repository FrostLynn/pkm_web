<?php
session_start();
include("koneksi.php");

// Retrieve form data
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
    echo "Passwords do not match. <a href='auth.php'>Try again</a>";
    exit();
}

// Check if the username already exists
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username already exists. Please choose another one.";
} else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user into the database
    $sql = "INSERT INTO users (fullname, username, password) VALUES ('$fullname', '$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! Go to <a href='auth.php'>Login</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
