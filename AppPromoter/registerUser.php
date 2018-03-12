<?php
$error = "";
$name = $_POST['name'];
$surname = $_POST['surname'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$androidId = $_POST['androidId'];
require('connection.php');
$conn->set_charset("utf8");
$sql1 = "select id from users where androidId='".$androidId."'";
$sql2 = "select id from users where user='".$user."'";
$sql3 = "select id from users where email='".$email."'";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
if ($result1->num_rows > 0)
   $error = "You have already registered with this device!";
else if ($result2->num_rows > 0)
    $error = "Username exists!";
else if ($result3->num_rows > 0)
    $error = "Email exists!";
if ($error == "")
{
$sql = "INSERT INTO users (name, surname, user, pass, email, androidId, fbId)
VALUES ('".$name."', '".$surname."', '".$user."', '".$pass."', '".$email."', '".$androidId."', '0')";
if ($conn->query($sql) === TRUE) {
      echo "ok";
} 
else {
    echo "Error";
}
}
 else
  echo "Error";
$conn->close();
?>