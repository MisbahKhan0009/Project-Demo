<?php
// Database connection details
$hostname = "127.0.0.1"; // Change this to your MySQL hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "UsersInfo"; // Change this to your MySQL database name

// Establish database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $age = $_POST["age"];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO usersData (name, email, location, age) VALUES ('$name', '$email', '$location', '$age')";

    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);



