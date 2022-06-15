<?php

require_once('Cars.php');
require_once('db-check.php');

$bww = new Cars();
//$bww->greeting();

$db = new DB("db", "root", "12345", "Books");
$conn = $db->connect();

print_r($conn);


$sql = "SELECT * FROM author";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"];
  }
} else {
  echo "0 results";
}
$conn->close();
