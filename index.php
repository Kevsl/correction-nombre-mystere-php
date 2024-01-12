<?php 
include("header.php");
include("checker.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The right price</title>
</head>
<body>

<form method="post" action="index.php" name="submit">
    <input type="number" name="givenNumber"/>
    <?php
    if(!$_SESSION["gameEnded"])
{      
     echo" <input type='submit' name='submit' value='submit' /> ";
}
    ?>
</form>

    <?php
    include("gameData.php")
    ?>

</body>
</html>