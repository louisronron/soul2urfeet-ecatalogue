<?php

// Require the db information variables.
require_once("db.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Construct the query
$sql = "SELECT * FROM products WHERE CODE LIKE '%" . $product_code . "%'";
$result = $conn->query($sql);

// // traverse the results
// if ($result->num_rows > 0) {
//   // output data of each row of the query.
//   echo "<table>";
//   while($row = $result->fetch_assoc()) {
//     echo "<tr><td style='width: 200px;'>" . $row["CODE"]. "</td><td style='width: 350px;'>" . $row["PRODUCT_NAME"]. "</td><td>" . $row["COLOR"] . "</td></tr>";
//   }
// } else {
//   echo "0 results";
// }
// echo "</table>";


$search_results = array();


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    // There are results
    array_push($search_results, $row);
  }
} else {
  // No results
}




// close the database connection
$conn->close();


?>