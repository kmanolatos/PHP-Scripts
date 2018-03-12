<?php
$userId = $_POST['userId'];
$appId = $_POST['appId'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "update users set points=points + 1 where id=".$userId;
if ($conn->query($sql) === TRUE) {
$sql = "insert into history (userId, appId) values (".$userId.", ".$appId.")";
if ($conn->query($sql) === TRUE) {
      echo "ok";
} 
  else {
    echo "Error";
  }
}
else {
    echo "Error";
}
$conn->close();
?>
