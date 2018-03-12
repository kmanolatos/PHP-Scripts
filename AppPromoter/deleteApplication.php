<?php
$id = $_POST['id'];
require('connection.php');
$sql = "delete FROM applications where id=".$id;
if ($conn->query($sql) === TRUE) {
  $sql = "delete FROM history where appId=".$id;
if ($conn->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "Error";
}
} else {
    echo "Error";
}
$conn->close();
?>