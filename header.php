<?php
session_start();

if(!isset($_SESSION["misteryNumber"])){
$_SESSION["misteryNumber"] = rand(1,100);
}
if(!isset($_SESSION["round"])){
$_SESSION["round"] = 0 ;
};
if(!isset($_SESSION["gameEnded"])){
$_SESSION["gameEnded"] = false ;
};

$feedback = "" ;
?>