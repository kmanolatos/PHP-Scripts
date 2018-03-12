<?php
$user = $_GET['user'];
$pass = $_GET['pass'];
$found = 0;
require('connection.php');
$sql = "SELECT id, user, pass, logIn FROM users where fbId=0";
$conn->set_charset("utf8");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($user == $row["user"] && $pass == $row["pass"])
      {
      if ($row["logIn"] > 0)
       $found = 2;
       else
       {
          $found = 1;
          $id = $row["id"];
          }
          break;
      }
    }
}
if ($found == 2)
{
 echo "already logged";
 }
else
 {
if ($found == 1)
{
  echo $id;
}
else
  echo "not found";
  }
 $conn->close();
?>