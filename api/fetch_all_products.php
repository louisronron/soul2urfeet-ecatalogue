<?php

require_once("db.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td style='width: 200px;'>" . $row["CODE"]. "</td><td style='width: 200px;'>" . $row["PRODUCT_NAME"]. "</td><td>" . $row["COLOR"] . "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();


?>