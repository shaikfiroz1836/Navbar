<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Firoz@7867867";
$dbname = "electronics";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the HTML form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO users (email,password,address) VALUES ('$email', '$password', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Signup successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
