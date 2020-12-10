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

    <title>Product Catalogue - Soul 2 UR Feet Ltd.</title>
    
  </head>
  <body>



  <table style="height: 100%; width: 100%; background-color: #f1f1f1;">
    <tr>
      <td class="align-middle text-center">
        
        

          <img src="img/logos/logo.png" width="120"><br/><br/><br/>

        
          <h2>Online Product Catalogue</h2>

          <input id="input_code" class="text-input-1" type="text" placeholder="Enter Product Code">
          <input id="search_button" class="button-1" type="button" value="SEARCH" onclick="search()">



      </td>
    </tr>

    <tr class="bg-dark" style="height: 50px; font-size: 10pt;">
      <td class="align-middle text-center"><p>&copy; 2020 Soul 2 UR Feet Ltd.</p></td>  
    </tr>
</table>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>




    <script type="text/javascript">
    
      function search() {
        var code = document.getElementById("input_code").value;
        window.location.href = "search_results.php?search=" + code.toUpperCase();
      }

    </script>






  </body>
</html>