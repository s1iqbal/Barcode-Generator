<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>Barcode Generator</title>

        <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
        <script src="script.js"></script>
    </head>
    <body>


      <div class="dropdown">
        <button class="dropbtn" id="findingLabel">Findings</button>
        <div class="dropdown-content">

          <div class="element"><a class="first" id="FCH">Charms</a></div>
          <div class="element"><a class="first" id="FPD">Pendants</a></div>
          <div class="element"><a class="first" id="FPI">Pins</a></div>
          <div class="element"><a class="first" id="FRI">Rings</a></div>
          <div class="element"><a class="first" id="FEA">Earrings</a></div>
          <div class="element"><a class="first" id="FCL">Clasps</a></div>

        </div>
      </div>



      <div class="dropdown">
        <button class="dropbtn" id="colourLabel">Select Material</button>
        <div class="dropdown-content">
          <a class="third" id="UA">Unidentified Allou</a>
          <a class="third" id="GO">Gold</a>
          <a class="third" id="CO">Copper</a>
          <a class="third" id="BR">Brass</a>
        </div>
      </div>

<form action="/insert.php" method="POST" onsubmit="return insert();">
  <input id="b-field" type="hidden" name="barcode" value=""/>
  <input type="submit" value="Put that shit in my nigguh" />
</form>
<div class="error-text">Select some stuff...</div>

<?php
$host_name  = "db669006600.db.1and1.com";
$database   = "db669006600";
$user_name  = "dbo669006600";
$password   = "coolkid525";







$dbc = mysqli_connect($host_name, $user_name, $password, $database);

$query = "SELECT * FROM barcodes";
$results   = @mysqli_query($dbc, $query);




echo '<table class="table table-striped table-bordered table-hover">';
echo "<tr><th>Barcode</th><tr>"-"</tr><th>Number</th></tr>";
while($row = mysqli_fetch_array($results))
{
  echo "<tr><td>";
  echo $row['barcode'];
  echo "</td><td>";
  printf("%03d", $row['num']);
  //echo $row['num'];
  echo "</td></tr>";

}
echo "</table>";

$query2 = "SELECT timestamp * FROM barcodes";
$results2 = @mysqli_query($dbc, $query);

  echo "TIMESTAMP HERE";
  echo $row['barcode'];



 ?>

<br><br><br><br><br><br><br><br><br>
jack u ag od



    </body>
</html>
