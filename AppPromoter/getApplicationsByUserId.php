<?php
$userId = $_GET['userId'];
require('connection.php');
$sql = "SELECT id, appName, link from applications where userId=".$userId;
$conn->set_charset("utf8");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "$".$row["id"]."$".$row["appName"]."$".$row["link"];
    }
}
$conn->close();
?>