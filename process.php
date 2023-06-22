<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "student-result");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the student ID and password from the form data
$student_id = $_POST["student_id"];
$password = $_POST["password"];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the data into the database
$sql = "INSERT INTO student_login (userid,password) VALUES ('$student_id','$hashed_password')";
if ($conn->query($sql) === TRUE) {
  echo "Sign-up successful!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
