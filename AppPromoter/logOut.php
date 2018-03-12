<?php
$id = $_POST['id'];
require('connection.php');
$sql = "update users set logIn=logIn-1 where id=".$id;
if ($conn->query($sql) === TRUE) {
    echo "ok";
} else {
    echo "error";
}
$conn->close();
?>