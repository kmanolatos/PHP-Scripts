<?php
$appName = $_POST['appName'];
$link = $_POST['link'];
$package = $_POST['package'];
$userId = $_POST['userId'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "SELECT id from applications where package LIKE '%".$package."%'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
   echo "App is already published!";
else
{
$sql = "INSERT INTO applications (appName, link, package, userId) VALUES ('".$appName."', '".$link."', '".$package."', ".$userId.")";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo $last_id;
} else {
    echo "error";
}
}
$conn->close();
?>