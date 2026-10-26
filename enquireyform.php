



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
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$city = $_POST['city'];
$property_type = $_POST['property_type'];


// Step 4: Insert query
$sql = "INSERT INTO demo_bookings (name, mobile, email, city, `property_type`)
        VALUES ('$name','$mobile', '$email', '$city', '$property_type')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Form submitted successfully!'); window.location.href='Home.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 5: Close connection
$conn->close();
?>
