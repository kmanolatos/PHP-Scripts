<?php
$userId = $_POST['userId'];
$pass = $_POST['pass'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "update users set pass='".$pass."' where id=".$userId;
if ($conn->query($sql) === TRUE) {
      echo "ok";
} 
else {
    echo "Error";
}
$conn->close();
?>