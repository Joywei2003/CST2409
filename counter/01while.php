<?php
  $x = 1; 
  $countTo = isset($_GET["end"])?  $_GET["end"] : 10;

  while($x <= $countTo ) {
    echo "The number is: $x <br>";
    $x++;
  } 
?>
