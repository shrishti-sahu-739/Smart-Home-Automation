<?php
$conn = mysqli_connect("localhost","root","","smartnest");

$result = mysqli_query($conn,"SELECT device_name,status FROM device_status1");

$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[$row['device_name']] = $row['status'];
}

echo json_encode($data);

?>