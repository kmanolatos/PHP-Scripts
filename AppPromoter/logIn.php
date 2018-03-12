<?php
$id = $_POST['id'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "update users set logIn=logIn+1 where id=".$id;
if ($conn->query($sql) === TRUE) {
$sql = "SELECT logIn from users where id=".$id;
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
       echo $row["logIn"];
    }
} else {
    echo "Error";
}
$conn->close();
?>