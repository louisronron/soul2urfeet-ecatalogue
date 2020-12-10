<?php

$search_query = $_GET["search"];
// specify the query string
$product_code = $search_query;
require_once("api/get_product_by_code.php");

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">

    <title>Search Results - Soul 2 UR Feet Ltd.</title>
    
  </head>
  <body>



<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logos/logo.png" alt="" width="30" height="24" class="d-inline-block align-middle">
      &nbsp;&nbsp;&nbsp;<h5 class="d-inline-block align-middle">Search Results of: "<?php echo $search_query; ?>" </h5>
    </a>
  </div>
</nav>


<?php

  // echo $search_results;
  echo "<table cellpadding='10' class='table table-striped table-responsive mt-4'>";
  foreach($search_results as $row) {
    echo "<tr>";
    echo "<td style='width: 200px'><img src='https://via.placeholder.com/150'></td>";
    echo "<td style='width: 200px'>" . $row["CODE"] . "</td>";
    echo "<td style='width: 300px'>" . $row["PRODUCT_NAME"] . "</td>";
    echo "<td>" . $row["COLOR"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>




    <script type="text/javascript">
    
      function search() {
        alert("Search button was clicked.");
      }

    </script>






  </body>
</html>