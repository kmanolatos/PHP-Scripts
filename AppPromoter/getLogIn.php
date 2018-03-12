<?php
$id = $_POST['id'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "SELECT logIn from users where id=".$id;
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
       echo $row["logIn"];
} 
$conn->close();
?>