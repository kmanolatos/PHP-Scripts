<?php
$userId = $_GET['userId'];
require('connection.php');
$sql = "SELECT DISTINCT a.appName,a.link, COUNT(DISTINCT h.userId) from applications as a INNER JOIN history as h on h.appId=a.id and a.userId=".$userId." GROUP BY a.appName";
$conn->set_charset("utf8");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
       echo "$".$row["appName"]."$".$row["COUNT(DISTINCT h.userId)"]."$".$row["link"];
    }
}
$conn->close();