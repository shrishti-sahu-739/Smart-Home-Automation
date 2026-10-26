<?php
// Step 1: Database connection
$servername = "localhost";
$username = "root"; // XAMPP default
$password = "";     // XAMPP default
$dbname = "smartnest"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Step 2: Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$automation_for = $_POST['automation_for'];
$control_options = isset($_POST['controls']) ? implode(", ", $_POST['controls']) : "";
$contact_number = $_POST['contact_number'];
$city = $_POST['city'];

// Step 4: Insert query
$sql = "INSERT INTO contactform (name, email, automation_for, control_options, `contact_number`, city)
        VALUES ('$name', '$email', '$automation_for', '$control_options', '$contact_number', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Form submitted successfully!'); window.location.href='about.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 5: Close connection
$conn->close();
?>
