<?php
$email = $_GET['email'];
require('connection.php');
$conn->set_charset("utf8");
$sql = "SELECT user, pass from users where email='".$email."' and fbId='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
       echo $row["user"]."$".$row["pass"];
    }
}
else
 echo "not found";
$conn->close();