<?php
session_start();
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve the hashed password from the database
$sql = "SELECT password FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];
    
    // Verify the password
    if (password_verify($password, $hashed_password)) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Login failed. <a href='auth.php'>Try again</a>";
    }
} else {
    echo "Login failed. <a href='auth.php'>Try again</a>";
}

$conn->close();
?>
