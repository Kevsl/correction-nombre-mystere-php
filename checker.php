<?php
if(isset($_POST["submit"] ) && $_SESSION["gameEnded"] == false){
$safeInput = htmlspecialchars(strip_tags(trim($_POST["givenNumber"])));

    if(isset($safeInput) && is_numeric($safeInput)){
        if($safeInput > $_SESSION["misteryNumber"]){
            $feedback = "The mistery number is less than ".$safeInput;
        } else if($safeInput < $_SESSION["misteryNumber"]){
            $feedback = "The mistery number is greater than ".$safeInput;
        }else if($safeInput == $_SESSION["misteryNumber"]){
           $feedback = "You won 1 billion dollars";
           $_SESSION["gameEnded"] = true ;
        }else{
            $feedback = "A problem occured, please insert your credit card";
        }
    }else{
    $feedback = "Veuillez entre un nombre numérique positif";
}
        $_SESSION["round"]++;

}