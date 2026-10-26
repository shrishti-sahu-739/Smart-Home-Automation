 <!-- <?php  
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "smartnest";

// $conn = new mysqli($servername, $username, $password, $dbname); 

// if ($conn->connect_error) { 
    // die("Connection failed: " . $conn->connect_error);
// }

// if (isset($_POST['device']) && isset($_POST['status'])) {
//     $device = $_POST['device'];
//     $status = $_POST['status'];

    
//     $check = "SELECT * FROM device_status1 WHERE device_name='$device'";
//     $result = $conn->query($check);

//     if ($result->num_rows > 0) {
        
//         $sql = "UPDATE device_status1 SET status='$status' WHERE device_name='$device'";
//     } else {
      
//         $sql = "INSERT INTO device_status1 (device_name, status) VALUES ('$device', '$status')";
//     }

//     if ($conn->query($sql) === TRUE) {
//         echo "Status saved successfully!";
//     } else {
//         echo "Error: " . $conn->error;
//     }
// }

// $conn->close();
// ?>   -->








  <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartnest";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['device']) && isset($_POST['status'])) {

    $device = trim($conn->real_escape_string($_POST['device']));
    $status = trim($conn->real_escape_string($_POST['status'])); 

    //Check device exists
    $check = "SELECT * FROM device_status1 WHERE device_name='$device'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
       // Update existing device
        $sql = "UPDATE device_status1 SET status='$status' WHERE device_name='$device'";
    } else {
       // Insert new device
        $sql = "INSERT INTO device_status1 (device_name, status) VALUES ('$device', '$status')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Status saved successfully!";
    } else {
        echo "SQL Error: " . $conn->error;
    }
}

 $conn->close();
?> 












