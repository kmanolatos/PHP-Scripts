<?php
$id = $_POST['id'];
$appName = $_POST['appName'];
require('connection.php');
$sql = "update applications set appName='".$appName."' where id=".$id;
if ($conn->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "Error";
}
$conn->close();
?>