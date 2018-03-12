<?php
$userId = $_POST['userId'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "select id from users where email='".$email."'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
 if ($email == "0")
   $sql = "update users set name='".$name."', surname='".$surname."' where id=".$userId;
 else
   $sql = "update users set name='".$name."', surname='".$surname."', email='".$email."' where id=".$userId;
if ($conn->query($sql) === TRUE) {
      echo "ok";
} 
else {
    echo "Error";
}
}
else {
    echo "Exists";
}
$conn->close();
?>