<?php 
echo "<p>".$feedback."</p> 
  <p>".$_SESSION["round"]." tours </p>";

if($_SESSION["gameEnded"] == true){
    echo "<a href='reset.php'>Reset</a>";
}

?>