<?php
$userId = $_GET['userId'];
require('connection.php');
$sql = "SELECT a.id, userId, appName, link, u.email from applications as a JOIN users as u ON a.userId = u.id WHERE a.userId!=".$userId." and a.id NOT IN (select appId FROM history where userId=".$userId.") ORDER BY u.points desc";
$conn->set_charset("utf8");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
       echo "$".$row["userId"]."$".$row["id"]."$".$row["appName"]."$".$row["email"]."$".$row["link"];   
       }
}
$conn->close();