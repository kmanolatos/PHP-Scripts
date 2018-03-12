<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$fbId = $_POST['fbId'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "SELECT id FROM users WHERE fbId='".$fbId."'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
  $sql = "INSERT INTO users (name, surname, user, pass, email, androidId, fbId)
  VALUES ('".$name."', '".$surname."', '', '', '".$email."', '0', '".$fbId."')";
  if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo $last_id;
} 
else {
    echo "Error";
}
}
else
{
    while($row = $result->fetch_assoc()) {
      echo $row['id'];
    }
}
$conn->close();
?>