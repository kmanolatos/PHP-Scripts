<?php
$id = $_GET['id'];
require('connection.php');
$sql = "SELECT name, surname, email, points FROM users where id=".$id;
$conn->set_charset("utf8");
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
     echo $row["name"]."$".$row["surname"]."$".$row["email"]."$".$row["points"];
}
$conn->close();
?>